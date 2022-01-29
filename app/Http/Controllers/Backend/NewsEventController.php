<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\NewsEvent;
use DB;

class NewsEventController extends Controller
{
    public function index()
    {

        $news = NewsEvent::all();
        return view('backend.newsEvent', compact('news'));
    }

    public function addNewsEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $news = new NewsEvent();
        $news->title = $request->title;
        $news->link = $request->link;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/News/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $news['image'] = $image_url;
        }

        $news->save();
        return redirect('newsEvent')->with(['message' => 'Add successfully']);
    }

    public function editNewsEvent($id)
    {
        $news = NewsEvent::find($id);
        return view('backend.editnewsEvent', compact('news'));
    }

    public function updateNewsEvent(Request $request, $id)
    {
        $news = NewsEvent::find($id);
        $news->title = $request->title;
        $news->link = $request->link;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/News/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $news['image'] = $image_url;
        }

        $news->save();
        return redirect('newsEvent')->with(['message' => 'Update successfully']);
    }



    public function deletnews($id)
    {

        $delete = DB::table('news_events')
            ->where('id', $id)
            ->first();
        $photo = $delete->image;
        unlink($photo);
        $dltuser = DB::table('news_events')
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
