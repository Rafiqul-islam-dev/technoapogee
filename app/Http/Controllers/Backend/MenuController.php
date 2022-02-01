<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Str;
use DB;

class MenuController extends Controller
{
    public function index()
    {

        $menu = Menu::all();
        return view('backend.menu', compact('menu'));
    }

    public function addmenu(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->slug = Str::slug($request->name, '-');
        $menu->description = $request->description;
        $menu->parentid = $request->parentid;
        $menu->submenu_id = $request->submenu_id;
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/menu/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $menu['image'] = $image_url;
        }

        $menu->save();
        return redirect()->back()->with('success', 'your message,here');
    }




    public function editmenu($id)
    {
        $menu = Menu::find($id);
        return view('backend.editMenu', compact('menu'));
    }

    public function updateMenu(Request $request, $id)
    {
        $menu = Menu::find($id);
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $menu->name = $request->name;
        $menu->slug = Str::slug($request->name, '-');
        $menu->description = $request->description;
        $menu->parentid = $request->parentid;
        $menu->submenu_id = $request->submenu_id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/clients/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $menu['image'] = $image_url;
        }
        $menu->save();
        return redirect()->back()->with('success', 'your message,here');
    }



    public function delet($id)
    {

        $delete = DB::table('menus')
            ->where('id', $id)
            ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltuser = DB::table('menus')
            ->where('id', $id)
            ->delete();

        if ($dltuser) {
            $notification = array(
                'messege' => 'Successfully Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->route('menu')->with($notification);
        } else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
