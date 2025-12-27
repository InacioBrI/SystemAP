<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected Admin $admin;

    public function __construct(Admin $admin)
    {
        $this->middleware(['auth', 'admin']);
        $this->admin = $admin;
    }

    public function dashboard()
    {
        return $this->admin->dashboard();
    }

    public function createUser()
    {
        return $this->admin->createUser();
    }

    public function storeUser(Request $request)
    {
        return $this->admin->storeUser($request);
    }
}
