<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class ProductController extends Controller
{
    public function index($slug)
    {
        $menu= Menu::get();
        $menudata= Menu::where('slug', $slug)->get()->first();
      //  $submenu_data = Menu::where('submenu_id',$menudata->id)->get();
       
    //   dd($menudata);
        return view('fontend.productsDetails', compact('menu', 'menudata'));
      
       //dd($submenu_data);
    }
}