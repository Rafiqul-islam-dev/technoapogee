<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsEvent;
use App\Models\Clients;
use App\Models\Project;
use App\Models\Menu;

class FontendController extends Controller
{
    public function index()
    {
        $Project = Project::latest()->paginate(10);
        $menu= Menu::get();
        //dd($menu);
        return view('fontend.home', compact('Project', 'menu'));
    }


    public function designConsultancy()
    {
        $menu= Menu::get();
        return view('fontend.designConsultancy', compact('menu'));
    }

    public function electricalFireAudit()
    {
        $menu= Menu::get();
        return view('fontend.electricalFireAudit', compact('menu'));
    }

    public function electrical()
    {
        $menu= Menu::get();
        return view('fontend.electricalSolutation', compact('menu'));
    }

    public function fireSoluion()
    {
        $menu= Menu::get();
        return view('fontend.fireSolutation', compact('menu'));
    }

    public function automationSolution()
    {
        $menu= Menu::get();
        return view('fontend.automationSolutation', compact('menu'));
    }



    public function ongoingProject()
    {
        $menu= Menu::get();
        $indProject = Project::latest()->paginate(10)->where('status', '=', 1);
        return view('fontend.ongoingProjects', compact('indProject','menu'));
    }


    public function industryProjects()
    {
        $menu= Menu::get();
       
        $indProject = Project::latest()->paginate(10)->where('status', '=', 0)->where('projecttype', '=', 'IP');
        return view('fontend.industryProjects', compact('indProject', 'menu',));
    }


    public function bankProjects()
    {
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'BFP')->get();
        return view('fontend.bankProjects', compact('indProject'));
    }

    public function ngo()
    {
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'NP')->get();
        return view('fontend.ngoProjects', compact('indProject'));
    }

    public function club()
    {
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'CP')->get();
        return view('fontend.clubProjects', compact('indProject'));
    }

    public function hotelResorts()
    {
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'HRP')->get();
        return view('fontend.hotelProjects', compact('indProject'));
    }

    public function govtProjects()
    {
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'GVP')->get();
        return view('fontend.govtProjects', compact('indProject'));
    }

    public function commercialProjects()
    {
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'CBP')->get();
        return view('fontend.commirsialProjects', compact('indProject'));
    }

    public function portfolio($slug)
    {
        $Project = Project::where("slug", $slug)->get();
        //dd($Project);
        return view('fontend.projectDetails', compact('Project'));
    }

    public function missionVission()
    {
        dd('ok');
    }


}
