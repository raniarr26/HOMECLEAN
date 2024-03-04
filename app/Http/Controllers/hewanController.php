<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hewanController extends Controller
{
    public function getData()
    {
    $dataHewan = [
        ['id' => 1, 'nama' => 'kucing', 'jenis' => 'mamalia'],
        ['id' => 2, 'nama' => 'anjing', 'jenis' => 'mamalia'],
        ['id' => 3, 'nama' => 'paus biru', 'jenis' => 'mamalia'],
        ['id' => 4,'nama' => 'kelinci', 'jenis' => 'mamalia'],
        ['id' => 5, 'nama' => 'domba', 'jenis' => 'mamalia'],
    ];
        return $dataHewan;
        }
        public function tampilkan(){
        $data = $this->getData();
        return view('list_hewan', compact("data"));
}
}
