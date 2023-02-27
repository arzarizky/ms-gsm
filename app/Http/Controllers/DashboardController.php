<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $user = Auth::user();

        if ($user->isSuperAdmin()) {
            return view('page.dashboard.role.super-admin.index');
        } else if ($user->isPelanggan()) {
            return view('page.dashboard.role.pelanggan.index');
        } else if ($user->isSales()) {
            return view('page.dashboard.role.sales.index');
        } else if ($user->isTeknisi()) {
            return view('page.dashboard.role.teknisi.index');
        }
    }
}
