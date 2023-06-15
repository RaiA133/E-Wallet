<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaldoController extends Controller
{
    public function kirim()
    {
        return view('saldo.kirim-saldo', [
            'title' => 'kirim'
        ]);
    }

    public function isi()
    {
        return view('saldo.isi-saldo', [
            'title' => 'isi'
        ]);
    }

    public function admin_saldo()
    {
        return view('saldo.admin-saldo', [
            'title' => 'admin-saldo'
        ]);
    }
}
