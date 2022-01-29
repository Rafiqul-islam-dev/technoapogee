<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Clients;
use DB;

class ClientsController extends Controller
{
    public function index()
    {

        $Clients = Clients::all();
        return view('backend.clients', compact('Clients'));
    }

    public function addClients(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $clients = new Clients();
        $clients->title = $request->title;
        $clients->description = $request->description;
        $clients->is_caseStudy = $request->is_caseStudy;
        $clients->priceType = $request->priceType;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/clients/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $clients['image'] = $image_url;
        }

        $clients->save();
        return redirect('clients')->with(['message' => 'Add successfully']);
    }

    public function editClients($id)
    {
        $clients = Clients::find($id);
        return view('backend.editClients', compact('clients'));
    }

    public function updateClients(Request $request, $id)
    {
        $clients = Clients::find($id);
        $clients->title = $request->title;
        $clients->description = $request->description;
        $clients->is_caseStudy = $request->is_caseStudy;
        $clients->priceType = $request->priceType;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/clients/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $clients['image'] = $image_url;
        }

        $clients->save();
        return redirect('clients')->with(['message' => 'Update successfully']);
    }



    public function delet($id)
    {

        $delete = DB::table('clients')
            ->where('id', $id)
            ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltuser = DB::table('clients')
            ->where('id', $id)
            ->delete();

        if ($dltuser) {
            $notification = array(
                'messege' => 'Successfully Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->route('clients')->with($notification);
        } else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
