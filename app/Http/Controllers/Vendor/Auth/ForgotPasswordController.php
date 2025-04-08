<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Contracts\Repositories\PasswordResetRepositoryInterface;
use App\Contracts\Repositories\VendorRepositoryInterface;
use App\Enums\SessionKey;
use App\Enums\ViewPaths\Vendor\Auth;
use App\Enums\ViewPaths\Vendor\ForgotPassword;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Vendor\PasswordResetRequest;
use App\Http\Requests\Vendor\VendorPasswordRequest;
use App\Services\PasswordResetService;
use App\Traits\SmsGateway;
use App\Models\Seller;
use App\Utils\Helpers;
use App\Utils\SMS_module;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
<<<<<<< HEAD
use Illuminate\Http\JsonResponse;
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Modules\Gateways\Traits\SmsGateway as AddonSmsGateway;

class ForgotPasswordController extends BaseController
{
    use SmsGateway;

    /**
     * @param VendorRepositoryInterface $vendorRepo
     * @param PasswordResetRepositoryInterface $passwordResetRepo
     * @param PasswordResetService $passwordResetService
     */
    public function __construct(
        private readonly VendorRepositoryInterface $vendorRepo,
        private readonly PasswordResetRepositoryInterface $passwordResetRepo,
        private readonly PasswordResetService $passwordResetService,
    )
    {
        $this->middleware('guest:seller', ['except' => ['logout']]);
    }

    /**
     * @param Request|null $request
     * @param string|null $type
     * @return View|Collection|LengthAwarePaginator|callable|RedirectResponse|null
     */
    public function index(?Request $request, string $type = null): View|Collection|LengthAwarePaginator|null|callable|RedirectResponse
    {
       return $this->getForgotPasswordView();
    }

    /**
     * @return View
     */
    public function getForgotPasswordView():View
    {
        return view(ForgotPassword::INDEX[VIEW]);
    }

    /**
     * @param PasswordResetRequest $request
<<<<<<< HEAD
     * @return JsonResponse
     */
    public function getPasswordResetRequest(PasswordResetRequest $request):JsonResponse
=======
     * @return RedirectResponse
     */
    public function getPasswordResetRequest(PasswordResetRequest $request):RedirectResponse
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    {
        session()->put(SessionKey::FORGOT_PASSWORD_IDENTIFY, $request['identity']);
        $verificationBy = getWebConfig('forgot_password_verification');
        if($verificationBy == 'email')
        {
            $vendor = $this->vendorRepo->getFirstWhere(['identity' => $request['identity']]);
            if (isset($vendor)) {
                $token = Str::random(120);
<<<<<<< HEAD
                $this->passwordResetRepo->add($this->passwordResetService->getAddData(identity:$request['identity'],token: $token,userType:'seller'));
                $resetUrl = url('/') . '/'.ForgotPassword::RESET_PASSWORD[URL].'?token=' . $token;
                try {
                    Mail::to($vendor['email'])->send(new \App\Mail\PasswordResetMail($resetUrl));
                }catch (\Exception $exception){
                    return response()->json(['error'=>translate('email_send_fail').'!!']);
                }
                return response()->json([
                    'verificationBy' => 'mail',
                    'success'=>translate('mail_send_successfully'),
                ]);
=======
                $this->passwordResetRepo->add($this->passwordResetService->getAddData(vendor:$vendor,token: $token,userType:'seller'));
                $resetUrl = url('/') . '/'.ForgotPassword::RESET_PASSWORD[URL].'?token=' . $token;
                try {
                    Mail::to($vendor['email'])->send(new \App\Mail\PasswordResetMail($resetUrl));
                    Toastr::success(translate('check_your_email'). translate('password_reset_url_sent'));
                }catch (\Exception $exception){
                    Toastr::error(translate('email_send_fail'));
                }
                return redirect()->back();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            }
        }elseif ($verificationBy == 'phone') {
            $vendor = $this->vendorRepo->getFirstWhere(['identity'=>$request['identity']]);
            if (isset($vendor)) {
<<<<<<< HEAD
                $token = rand(1000, 9999);
                $this->passwordResetRepo->add($this->passwordResetService->getAddData(identity:$request['identity'],token: $token,userType:'seller'));
=======
                $token = Str::random(120);
                $this->passwordResetRepo->add($this->passwordResetService->getAddData(vendor:$vendor,token: $token,userType:'seller'));
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                $publishedStatus = 0;
                $paymentPublishedStatus = config('get_payment_publish_status');
                if (isset($payment_published_status[0]['is_published'])) {
                    $publishedStatus = $paymentPublishedStatus[0]['is_published'];
                }
                if($publishedStatus == 1){
                    $response = AddonSmsGateway::send($vendor['phone'], $token);
                }else{
                    $response = $this->send($vendor['phone'], $token);
                }
                if ($response === "not_found") {
<<<<<<< HEAD
                    return response()->json([
                        'error'=>translate('SMS_configuration_missing'),
                    ]);
                }else{
                    return response()->json([
                        'verificationBy' => 'phone',
                        'redirectRoute' => route('vendor.auth.forgot-password.otp-verification'),
                        'success'=>translate('Check_your_phone').', '.translate('password_reset_otp_sent'),
                    ]);
                }
            }
        }
        return response()->json([
            'error'=>translate('no_such_user_found').'!!',
        ]);
=======
                    Toastr::error(translate('SMS_configuration_missing'));
                    return back();
                }
                Toastr::success(translate('Check_your_phone').' '.translate('Password_reset_otp_sent'));
                return redirect()->back();
            }
        }
        Toastr::error(translate('No_such_user_found').'!');
        return redirect()->back();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }

    /**
     * @return View
     */
    public function getOTPVerificationView():View
    {
        return view(ForgotPassword::OTP_VERIFICATION[VIEW]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function submitOTPVerificationCode(Request $request):RedirectResponse
    {
        $id = session(SessionKey::FORGOT_PASSWORD_IDENTIFY);
<<<<<<< HEAD
        $passwordResetData = $this->passwordResetRepo->getFirstWhere(params: ['user_type' => 'seller', 'token' => $request['otp'], 'identity' => $id]);
        if (isset($passwordResetData)) {
            $token = $request['otp'];
            return redirect()->route('vendor.auth.forgot-password.reset-password', ['token' => $token]);
=======
        $passwordResetData = $this->passwordResetRepo->getFirstWhere(params: ['user_type' => 'seller', 'token' => $request['token'], 'identity' => $id]);
        if (isset($passwordResetData)) {
            $token = $request['otp'];
            return redirect()->route('vendor.auth.reset-password', ['token' => $token]);
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        }
        Toastr::error(translate('invalid_otp'));
        return redirect()->back();
    }
    /**
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function getPasswordResetView(Request $request):View|RedirectResponse
    {
        $passwordResetData = $this->passwordResetRepo->getFirstWhere(params: ['user_type'=>'seller','token' => $request['token']]);
        if (isset($passwordResetData)) {
            $token = $request['token'];
            return view(ForgotPassword::RESET_PASSWORD[VIEW], compact('token'));
        }
        Toastr::error(translate('Invalid_URL'));
        return redirect()->route(Auth::VENDOR_LOGOUT[URI]);
    }
    /**
     * @param VendorPasswordRequest $request
<<<<<<< HEAD
     * @return JsonResponse
     */
    public function resetPassword(VendorPasswordRequest $request): JsonResponse
=======
     * @return RedirectResponse
     */
    public function resetPassword(VendorPasswordRequest $request): RedirectResponse
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    {
        $passwordResetData = $this->passwordResetRepo->getFirstWhere(params: ['user_type' => 'seller', 'token' => $request['reset_token']]);
        if ($passwordResetData) {
            $vendor = $this->vendorRepo->getFirstWhere(params: ['identity' => $passwordResetData['identity']]);
            $this->vendorRepo->update(id: $vendor['id'], data: ['password' => bcrypt($request['password'])]);
            $this->passwordResetRepo->delete(params: ['id' => $passwordResetData['id']]);
<<<<<<< HEAD
            return response()->json([
                'passwordUpdate' => 1,
                'success'=>translate('Password_reset_successfully'),
                'redirectRoute' => route(Auth::VENDOR_LOGOUT[URI])
            ]);
        } else {
            return response()->json(['error'=>translate('invalid_URL')]);
        }
=======
            Toastr::success(translate('Password_reset_successfully'));
        } else {
            Toastr::error(translate('invalid_URL'));
        }

        return redirect()->route(Auth::VENDOR_LOGOUT[URI]);
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }
}
