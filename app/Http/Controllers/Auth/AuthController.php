<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\Login;
use App\Services\Auth\ForgotPassword;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        protected Login $login,
        protected ForgotPassword $forgotPassword
    ) {}

    public function showLogin()
    {
        return $this->login->show();
    }

    public function login(Request $request)
    {
        return $this->login->authenticate($request);
    }

    public function showForgot()
    {
        return $this->forgotPassword->show();
    }

    public function sendResetLink(Request $request)
    {
        return $this->forgotPassword->send($request);
    }

    public function showReset($token)
    {
        return $this->forgotPassword->showReset($token);
    }

    public function reset(Request $request)
    {
        return $this->forgotPassword->reset($request);
    }

    public function logout(Request $request)
    {
        return $this->login->logout($request);
    }
}

