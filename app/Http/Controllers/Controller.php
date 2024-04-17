<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('user.page.Home',[
            'title'  => 'home',
        ]);
    }
    public function jasa()
    {
        return view('user.page.jasa',[
            'title'  => 'Jasa',
        ]);
    }
    public function transaksi()
    {
        return view('user.page.transaksi',[
            'title'  => 'Transaksi',
        ]);
    }
    public function contact()
    {
        return view('user.layout.index',[
            'title'  => 'Home',
        ]);
    }
}
