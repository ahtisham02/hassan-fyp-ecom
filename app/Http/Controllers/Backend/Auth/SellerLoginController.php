<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Seller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SellerLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/seller';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm(): \Illuminate\View\View
    {
        return view('backend.pages.auth.seller.login');
    }

    public function showRegistrationForm(Request $request)
    {
        if($request->isMethod('POST')){
            $validate = Validator::make($request->all(),[
                'email' => 'required|email|unique:sellers',
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'address' => 'required|string',
                'mobile' => 'required|string',
                'city' => 'required|string',
                'gender' => 'required',
                'password' => 'required|min:6|confirmed',
                'company_name' => 'required|string',
                'business_address' => 'required|string',
                'business_email' => 'required|email',
                'business_number' => 'required|string'
            ]);

            if($validate->fails()){
                return redirect()->back()->withErrors($validate)->withInput();
            }

            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $seller = new Seller();
            $seller->id = rand(1,100);
            $seller->first_name = $data['first_name'];
            $seller->last_name = $data['last_name'];
            $seller->address = $data['address'];
            $seller->mobile = $data['mobile'];
            $seller->city = $data['city'];
            $seller->company_name = $data['company_name'];
            $seller->business_address = $data['business_address'];
            $seller->business_email = $data['business_email'];
            $seller->business_mobile = $data['business_number'];
            $seller->password = $data['password'];
            $seller->email = $data['email'];
            $seller->is_approve = 0;
            $seller->gender = $data['gender'];
            $seller->save();
            return redirect()->to(url('/seller/login'))->with('status','Registration Successful. Please wait for approval');
        }
        return view('backend.pages.auth.seller.register');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if(Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password,'is_active'=>1,'is_approve'=>1],$request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('seller.home'))
                ->with('status','You are Logged!');
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('seller/login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('seller');
    }
}
