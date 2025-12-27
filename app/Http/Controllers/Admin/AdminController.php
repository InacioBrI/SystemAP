<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Admin;

class AdminController extends Controller
{
    protected Admin $admin;

    public function __construct(Admin $admin)
    {

        $this->middleware('auth');
        $this->admin = $admin;
    }

    public function index()
    {
        return $this->admin->dashboard();
    }
}
