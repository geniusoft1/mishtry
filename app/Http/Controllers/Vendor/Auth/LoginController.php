<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Contracts\Repositories\VendorRepositoryInterface;
use App\Enums\SessionKey;
use App\Enums\ViewPaths\Vendor\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\LoginRequest;
use App\Repositories\VendorWalletRepository;
use App\Services\VendorService;
use App\Traits\RecaptchaTrait;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Contracts\View\View;
<<<<<<< HEAD
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

class LoginController extends Controller
{
    use RecaptchaTrait;

    public function __construct(
        private readonly VendorRepositoryInterface $vendorRepo,
        private readonly VendorService             $vendorService,
<<<<<<< HEAD
        private readonly VendorWalletRepository    $vendorWalletRepo,
=======
        private readonly VendorWalletRepository    $vendorWalletRepository,
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

    )
    {
        $this->middleware('guest:seller', ['except' => ['logout']]);
    }

    public function generateReCaptcha(): void
    {
        $recaptchaBuilder = $this->generateDefaultReCaptcha(4);
        if (Session::has(SessionKey::VENDOR_RECAPTCHA_KEY)) {
            Session::forget(SessionKey::VENDOR_RECAPTCHA_KEY);
        }
        Session::put(SessionKey::VENDOR_RECAPTCHA_KEY, $recaptchaBuilder->getPhrase());
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $recaptchaBuilder->output();
    }

    public function getLoginView(): View
    {
        $recaptchaBuilder = $this->generateDefaultReCaptcha(4);
        $recaptcha = getWebConfig(name: 'recaptcha');
        Session::put(SessionKey::VENDOR_RECAPTCHA_KEY, $recaptchaBuilder->getPhrase());
        return view(Auth::VENDOR_LOGIN[VIEW], compact('recaptchaBuilder', 'recaptcha'));
    }

<<<<<<< HEAD
    public function login(LoginRequest $request): JsonResponse
    {
        $recaptcha = getWebConfig(name: 'recaptcha');
=======
    public function login(LoginRequest $request): RedirectResponse
    {
        $recaptcha = getWebConfig(name: 'recaptcha');

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        if (isset($recaptcha) && $recaptcha['status'] == 1) {
            $request->validate([
                'g-recaptcha-response' => [
                    function ($attribute, $value, $fail) {
                        $secret_key = getWebConfig(name: 'recaptcha')['secret_key'];
                        $response = $value;
                        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response;
                        $response = Http::get($url);
                        $response = $response->json();
                        if (!isset($response['success']) || !$response['success']) {
                            $fail(translate('recaptcha_failed'));
                        }
                    },
                ],
            ]);
        } else {
            if ($recaptcha['status'] != 1 && strtolower($request->vendorRecaptchaKey) != strtolower(Session(SessionKey::VENDOR_RECAPTCHA_KEY))) {
<<<<<<< HEAD
                return response()->json(['error'=>translate('captcha_failed').'!']);
            }
        }
        $vendor = $this->vendorRepo->getFirstWhere(['identity' => $request['email']]);
        $passwordCheck = Hash::check($request['password'],$vendor['password']);
        if (!$vendor){
            return response()->json(['error'=>translate('credentials_doesnt_match').'!']);
        }
        if ($passwordCheck && $vendor['status'] !== 'approved') {
            return response()->json(['status' => $vendor['status']]);
        }
        if ($this->vendorService->isLoginSuccessful($request->email, $request->password, $request->remember)) {
            if ($this->vendorWalletRepo->getFirstWhere(params:['id'=>auth('seller')->id()]) === false) {
                $this->vendorWalletRepo->add($this->vendorService->getInitialWalletData(vendorId:auth('seller')->id()));
            }
            Toastr::info(translate('welcome_to_your_dashboard').'.');
            return response()->json([
                'success' =>translate('login_successful') . '!',
                'redirectRoute'=>route('vendor.dashboard.index'),
            ]);
        }else{
            return response()->json(['error'=>translate('credentials_doesnt_match').'!']);

        }
=======
                Session::forget(SessionKey::VENDOR_RECAPTCHA_KEY);
                return back()->withErrors(translate('captcha_failed'));
            }
        }

        $vendor = $this->vendorRepo->getFirstWhere(['identity' => $request['email']]);
        if (isset($vendor) && $vendor['status'] !== 'approved') {
            $statusMessages = [
                'pending' => translate('your_account_is_not_approved_yet') . '.',
                'suspended' => translate('your_account_has_been_suspended') . '!'
            ];
            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([$statusMessages[$vendor->status]]);
        }

        if ($this->vendorService->isLoginSuccessful($request->email, $request->password, $request->remember)) {
            if ($this->vendorWalletRepository->getFirstWhere(params:['id'=>auth('seller')->id()]) === false) {
                $this->vendorWalletRepository->add($this->vendorService->getInitialWalletData());
            }
            Toastr::info(translate('welcome_to_your_dashboard') . '!');
            return redirect()->route('vendor.dashboard.index');
        }

        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([translate('credentials_do_not_match_or_your_account_has_been_suspended')]);
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }

    public function logout(): RedirectResponse
    {
        $this->vendorService->logout();
<<<<<<< HEAD
        Toastr::success(translate('logged_out_successfully').'.');
=======
        session()->flash('success', translate('logged_out_successfully'));
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        return redirect()->route('vendor.auth.login');
    }
}
