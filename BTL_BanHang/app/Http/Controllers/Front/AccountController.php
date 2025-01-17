<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\User\UserServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function login(){
        return view('front.account.login');
    }
    public function checkLogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_client, //tai khoan cap do khach hang
        ];

        $remember = $request->remember;

        if(Auth::attempt($credentials, $remember)){
            return redirect(''); //trang chu
        }else{
            return back()->with('notification', 'ERROR: Email or password is wrong');
        }
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
    public function register()
    {
        return view('front.account.register');
    }
    public function postRegister(Request $request)
    {
        if($request->password != $request->password_confirmation){
            return back()
                ->with('notification', 'ERROR: Confirm password does not match');
        }

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'level'=>2, //dang ky tai khoan cap: khach hang binh thuong
        ];

        $this->userService->create($data);

        return redirect('account/login')
            ->with('notification', 'Register Success! Please login,');
    }
}
