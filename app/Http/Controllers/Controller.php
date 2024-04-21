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
        return view('user.page.contact',[
            'title'  => 'contact',
        ]);
    }
    public function checkout()
    {
        return view('user.page.checkout',[
            'title'  => 'checkout',
        ]);
    }
    public function admin()
    {
        return view('admin.layout.index',[
            'title'  => 'admin dashboard',
        ]);
    
}
public function product()
{
    return view('admin.page.product',[
        'title'  => 'admin product',
    ]);
}
 public function report()
    {
        return view('admin.page.report',[
            'title'  => 'admin report',
        ]);
    
}
public function user()
    {
        return view('admin.page.user',[
            'title'  => 'admin user',
        ]);
    
}


}