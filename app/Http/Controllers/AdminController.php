<?php

namespace App\Http\Controllers;

use App\Mail\Websitemail;
use App\Models\Admin;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view('admin.login');
    }
    public function AdminDashboard(){
        return view('admin.admin_dashboard');
    }

    public function AdminLoginSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];
        if(Auth::guard('admin')->attempt($data) ){
            return redirect()->route('admin.dashboard')->with('success', 'Login Successfully');
        }else{
            return redirect()->route('admin.login')->with('error', 'Invalid Credentials');

        }
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout Success');
    }

    public function AdminForgetPassword(){
        return view('admin.forget_password');
    }

    public function AdminPasswordSubmit(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $admin_data = Admin::where('email', $request->email)->first();
        if(!$admin_data){
            return redirect()->back()->with('error', 'Email Not Found');
        }
        $token = hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please Click on below link to reset password<br>';
        $message .= "<a href='".$reset_link." '> Click Here </a>";

        \Mail::to($request->email)->send(new Websitemail($subject, $message));
        return redirect()->back()->with('success', 'Reset Password Link Send On Your Email');
    }
    public function AdminResetPassword($token, $email){
        $admin_data = Admin::where('email', $email)->where('token', $token)->first();
        if(!$admin_data){
            return redirect()->route('admin.login')->with('error', 'Invalid Token Or Email');
        }
        return view('admin.reset_password', compact('token', 'email'));
    }

    public function AdminResetPasswordSubmit(Request $request){
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $admin_data = Admin::where('email', $request->email)->where('token', $request->token)->first();
        $admin_data->password = Hash::make($request->password);
        $admin_data->token = "";
        $admin_data->update();

        return redirect()->route('admin.login')->with('success', 'Password Reset Success');

    }
}
