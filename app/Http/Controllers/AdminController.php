<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin', [
            'title' => 'admin',
            'nasabah' => User::all()
        ]);
    }
    public function delete(User $id)
    {
        $user = User::findOrFail($id);
        // dd($user);
        $user->delete();
        session()->flash('success', 'User deleted successfully.');
        return redirect()->route('pages.admin');
    }
}
