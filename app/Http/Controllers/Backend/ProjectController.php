<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $comProject = Project::where('status', '=', 0)->get();
        return view('Backend.completeProject', compact('comProject'));
    }

    public function ongoingProject()
    {
        $comProject = Project::where('status', '=', 1)->get();
        return view('Backend.ongoingProject', compact('comProject'));
    }

    public function addCompletedProject(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'projecttype' => 'required',
        ]);
        

        $news = new Project();
        $news->status = $request->status;
        $news->name = $request->name;
        $news->slug = Str::slug($request->name, '-');
        $news->companytype = $request->companytype;
        $news->Location = $request->Location;
        $news->workscope = $request->workscope;
        $news->projectdetails = $request->projectdetails;
        $news->projecttype = $request->projecttype;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/prooject/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $news['image'] = $image_url;
        }

        $news->save();
        return redirect('completeProject')->with(['message' => 'Added successfully']);
    }

    public function addongoingProject(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'projecttype' => 'required',
        ]);

        $news = new Project();
        $news->status = $request->status;
        $news->name = $request->name;
        $news->slug = Str::slug($request->name, '-');
        $news->companytype = $request->companytype;
        $news->Location = $request->Location;
        $news->workscope = $request->workscope;
        $news->projectdetails = $request->projectdetails;
        $news->projecttype = $request->projecttype;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/prooject/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);
            $news['image'] = $image_url;
        }

        $news->save();
        return redirect('ongoingProject')->with(['message' => 'Add successfully']);
    }


}
