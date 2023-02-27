<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\User;

class UserManagerController extends Controller
{
    public function index()
    {
        $users = User::orderBy('updated_at', 'DESC')->paginate(10);
        $totalSuperAdmin = User::where('role', 'Super Admin')->get()->count();
        $totalPelanggan = User::where('role', 'Pelanggan')->get()->count();
        $totalSales = User::where('role', 'Sales')->get()->count();
        $totalTeknisi = User::where('role', 'Teknisi')->get()->count();
        $roles = Roles::all();

        return view('page.user-manager.index', [
            'users' => $users,
            'roles' => $roles,
            'totalSuperAdmin'   => $totalSuperAdmin,
            'totalPelanggan'    => $totalPelanggan,
            'totalSales'        => $totalSales,
            'totalTeknisi'      => $totalTeknisi
        ]);
    }

    public function store(Request $request)
    {
        $validator = $request->validate(
            [
                'name'              => 'string|max:255|required',
                'email'             => 'email|required|unique:users,email',
                'no_tlp'            => 'numeric|required',
                'avatar'            => 'required|max:2048',
                'role'              => 'string|max:255|required',
                'password'          => 'string|max:255|required',
            ]
        );

        dd($request->file('avatar'));


        if($request->file('avatar'))
        {
            $path = $request->file('image_banner')->store('public/Image/Avatar');
            $nameFile = 'storage/Image/Banner_Image/' . $request->file('image_banner')->hashName();
            $validator['image_banner'] = $nameFile;
        }

        $validator['password'] = bcrypt($validator['password']);
        User::create($validator);
        return redirect()->route('user-manager.index')->with('success','User ' . $request->name . ' With Role ' . $request->role . ' Created Successfully.');
    }
}
