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
        $roles = Roles::all();
        $totalSuperAdmin = User::where('role_id', 1)->get()->count();
        $totalPelanggan = User::where('role_id', 2)->get()->count();
        $totalSales = User::where('role_id', 3)->get()->count();
        $totalTeknisi = User::where('role_id', 4)->get()->count();

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
                'role_id'           => 'numeric|required',
                'password'          => 'string|max:255|required',
            ]
        );

        $roles = Roles::where('id', $request->role_id)->first();
        $rolesName = $roles->name;

        if($request->file('avatar'))
        {
            $path = $request->file('avatar')->store('public/Image/Avatar');
            $nameFile = 'storage/Image/Avatar/' . $request->file('avatar')->hashName();
            $validator['avatar'] = $nameFile;
        }

        $validator['password'] = bcrypt($validator['password']);
        User::create($validator);
        return redirect()->route('user-manager.index')->with('success','User ' . $request->name . ' With Role ' . $rolesName . ' Created Successfully.');
    }
}
