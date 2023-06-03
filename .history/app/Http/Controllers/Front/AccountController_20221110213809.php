<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $orderService;

    public function __construct(UserServiceInterface $userService, OrderServiceInterface $orderService)
    {
        $this->userService = $userService;
        $this->orderService = $orderService;
    }

    public function login()
    {
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_client, // Tài khoản khách hàng cấp độ bình thường.

        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember))
        {
            //return redirect(''); //Trang chủ
            return redirect()->intended(''); //Mặc định là: trang chủ.
        } else {
            return back()
                ->with('Thông báo', 'Thất bại: Email hoặc mật khẩu sai');
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

    public function postRegister(Request $request) {
        if ($request->password != $request->password_confirmation ) {
            return back()
                ->with('Thông báo', 'Thất bại: Xác nhận mật khẩu không khớp ');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => Constant::user_level_client, // Đăng ký tài khoản cấp: khách hàng bình thường.
        ];

        $this->userService->create($data);

        return redirect('account/login')
            ->with('Thông báo','Đăng ký thành công!! Vui lòng đăng nhập.' );
    }

    public function myOrderIndex()
    {
        $orders = $this->orderService->getOrderByUserId(Auth::id());

        return view('front.account.my-order.index', compact('orders'));
    }

    public function myOrderShow($id)
    {
        $order = $this->orderService->find($id);

        return view('front.account.my-order.show', compact('order'));
    }
}
