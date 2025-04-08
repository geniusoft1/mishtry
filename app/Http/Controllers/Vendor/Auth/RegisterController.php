<?php

namespace App\Http\Controllers\Vendor\Auth;

<<<<<<< HEAD
use App\Contracts\Repositories\ShopRepositoryInterface;
use App\Contracts\Repositories\VendorRepositoryInterface;
use App\Contracts\Repositories\VendorWalletRepositoryInterface;
use App\Enums\SessionKey;
use App\Enums\ViewPaths\Vendor\Auth;
use App\Events\VendorRegistrationMailEvent;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Vendor\VendorAddRequest;
use App\Services\ShopService;
use App\Services\VendorService;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;

class RegisterController extends BaseController
{
    public function __construct(
        private readonly VendorRepositoryInterface $vendorRepo,
        private readonly VendorWalletRepositoryInterface $vendorWalletRepo,
        private readonly ShopRepositoryInterface $shopRepo,
        private readonly VendorService $vendorService,
        private readonly ShopService $shopService,
    )
    {
    }

    public function index(?Request $request, string $type = null): View|Collection|LengthAwarePaginator|null|callable|RedirectResponse
    {
        return $this->getView();
    }
    public function getView():View|RedirectResponse
    {
        $businessMode = getWebConfig(name:'business_mode');
        $vendorRegistration = getWebConfig(name:'seller_registration');
        if((isset($businessMode) && $businessMode=='single') || (isset($vendorRegistration) && $vendorRegistration==0))
        {
            Toastr::warning(translate('access_denied').'!!');
            return redirect('/');
        }
        return view(VIEW_FILE_NAMES[Auth::VENDOR_REGISTRATION[VIEW]]);
    }
    public function add(VendorAddRequest $request):JsonResponse
    {
        $recaptcha = getWebConfig('recaptcha');
        if (isset($recaptcha) && $recaptcha['status'] == 1) {
            try {
                $request->validate([
                    'g-recaptcha-response' => [
                        function ($attribute, $value, $fail) {
                            $secret_key = getWebConfig('recaptcha')['secret_key'];
                            $response = $value;
                            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response;
                            $response = \file_get_contents($url);
                            $response = json_decode($response);
                            if (!$response->success) {
                                $fail(translate('ReCAPTCHA_Failed'));
                            }
                        },
                    ],
                ]);
            } catch (\Exception $exception) {
                return response()->json(['error'=>translate('Captcha_Failed')]);
            }
        } else {
            if (strtolower($request['default_recaptcha_id_seller_regi']) != strtolower(Session(SessionKey::VENDOR_RECAPTCHA_KEY))) {
                Session::forget(SessionKey::VENDOR_RECAPTCHA_KEY);
                return response()->json(['error'=>translate('Captcha_Failed')]);
            }
        }
        $vendor = $this->vendorRepo->add(data: $this->vendorService->getAddData($request));
        $this->shopRepo->add($this->shopService->getAddShopDataForRegistration(request:$request,vendorId: $vendor['id']));
        $this->vendorWalletRepo->add($this->vendorService->getInitialWalletData(vendorId:$vendor['id']));

        $data = [
            'name' => $request['f_name'],
            'status' => 'pending',
            'subject' => translate('Vendor_Registration_Successfully_Completed'),
            'title' => translate('registration_Complete').'!',
            'message' => translate('congratulation').'!'.translate('Your_registration_request_has_been_send_to_admin_successfully').'!'.translate('Please_wait_until_admin_reviewal').'.',
        ];
        event(new VendorRegistrationMailEvent($request['email'],$data));
        return response()->json([
                'redirectRoute'=>route('vendor.auth.login')
            ]
        );
=======
use App\Enums\SessionKey;
use App\Utils\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\Shop;
use App\Utils\ImageManager;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        $business_mode=Helpers::get_business_settings('business_mode');
        $seller_registration=Helpers::get_business_settings('seller_registration');
        if((isset($business_mode) && $business_mode=='single') || (isset($seller_registration) && $seller_registration==0))
        {
            Toastr::warning(translate('access_denied!!'));
            return redirect('/');
        }
        return view(VIEW_FILE_NAMES['seller_registration']);
    }

    public function store(Request $request)
    {
        $request->validate([
                'image'             => 'required|mimes: jpg,jpeg,png,gif',
                'logo'              => 'required|mimes: jpg,jpeg,png,gif',
                'banner'            => 'required|mimes: jpg,jpeg,png,gif',
                'bottom_banner'     => 'mimes: jpg,jpeg,png,gif',
                'email'             => 'required|unique:sellers',
                'shop_address'      => 'required',
                'f_name'            => 'required',
                'l_name'            => 'required',
                'shop_name'         => 'required',
                'phone'             => 'required|unique:sellers',
                'password'          => 'required|same:confirm_password|min:8',
                'confirm_password'  => 'required',
            ],
            [
                'image.required' => translate('image_is_required') . '!',
                'logo.required' => translate('logo_name_is_required') . '!',
                'banner.required' => translate('banner_name_is_required') . '!',
                'bottom_banner.required' => translate('bottom_banner_name_is_required') . '!',
                'shop_address.required' => translate('shop_address_is_required') . '!',
                'password.required'            => translate('password_is_required') . '!',
                'password.confirmed'           => translate('password_confirmation_mismatch') . '!',
                'confirm_password.required'    => translate('confirm_password_is_required') . '!',
            ]
        );

        if($request['from_submit'] != 'admin') {
            $recaptcha = Helpers::get_business_settings('recaptcha');
            if (isset($recaptcha) && $recaptcha['status'] == 1) {
                try {
                    $request->validate([
                        'g-recaptcha-response' => [
                            function ($attribute, $value, $fail) {
                                $secret_key = Helpers::get_business_settings('recaptcha')['secret_key'];
                                $response = $value;
                                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response;
                                $response = \file_get_contents($url);
                                $response = json_decode($response);
                                if (!$response->success) {
                                    $fail(translate('ReCAPTCHA Failed'));
                                }
                            },
                        ],
                    ]);
                } catch (\Exception $exception) {
                }
            } else {
                if (strtolower($request->default_recaptcha_id_seller_regi) != strtolower(Session(SessionKey::VENDOR_RECAPTCHA_KEY))) {
                    Session::forget('default_recaptcha_id_seller_regi');
                    return back()->withErrors(translate('Captcha_Failed'));
                }
            }
        }

        DB::transaction(function ($r) use ($request) {
            $seller = new Seller();
            $seller->f_name = $request->f_name;
            $seller->l_name = $request->l_name;
            $seller->phone = $request->phone;
            $seller->email = $request->email;
            $seller->image = ImageManager::upload('seller/', 'webp', $request->file('image'));
            $seller->password = bcrypt($request->password);
            $seller->status =  $request->status == 'approved'?'approved': "pending";
            $seller->save();

            $shop = new Shop();
            $shop->seller_id = $seller->id;
            $shop->name = $request->shop_name;
            $shop->slug = Str::slug($request['shop_name'], '-') . '-' . Str::random(6);
            $shop->address = $request->shop_address;
            $shop->contact = $request->phone;
            $shop->image = ImageManager::upload('shop/', 'webp', $request->file('logo'));
            $shop->banner = ImageManager::upload('shop/banner/', 'webp', $request->file('banner'));
            $shop->bottom_banner = ImageManager::upload('shop/banner/', 'webp', $request->file('bottom_banner'));
            $shop->save();

            DB::table('seller_wallets')->insert([
                'seller_id' => $seller['id'],
                'withdrawn' => 0,
                'commission_given' => 0,
                'total_earning' => 0,
                'pending_withdraw' => 0,
                'delivery_charge_earned' => 0,
                'collected_cash' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        if($request->status == 'approved'){
            Toastr::success(translate('shop_apply_successfully'));
            return back();
        }else{
            Toastr::success(translate('shop_apply_successfully'));
            return redirect()->route('vendor.auth.login');
        }


>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }
}
