<?php
// app/Http/Controllers/ListItemController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function showListItems()
    {
        return view('list_items');
    }
}
