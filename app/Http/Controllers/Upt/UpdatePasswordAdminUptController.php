<?php

namespace App\Http\Controllers\Upt;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdatePasswordAdminUptController extends Controller
{
    public function index_password()
    {
        $users = User::findOrFail(Auth::user()->id);

        return view('components.admin-upt.password.update', compact('users'));
    }

    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('index_password')->with('status', 'Selamat password akun pengguna berhasil diubah');
    }
}
