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
            'data' => User::all()
        ]);
    }
}
