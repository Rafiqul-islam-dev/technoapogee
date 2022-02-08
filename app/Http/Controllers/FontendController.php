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
        $menu= Menu::get();
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'BFP')->get();
        return view('fontend.bankProjects', compact('indProject', 'menu'));
    }

    public function ngo()
    {
        $menu= Menu::get();
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'NP')->get();
        return view('fontend.ngoProjects', compact('indProject', 'menu'));
    }

    public function club()
    {
        $menu= Menu::get();
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'CP')->get();
        return view('fontend.clubProjects', compact('indProject', 'menu'));
    }

    public function hotelResorts()
    {
        $menu= Menu::get();
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'HRP')->get();
        return view('fontend.hotelProjects', compact('indProject', 'menu'));
    }

    public function govtProjects()
    {
        $menu= Menu::get();
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'GVP')->get();
        return view('fontend.govtProjects', compact('indProject', 'menu'));
    }

    public function commercialProjects()
    {
        $menu= Menu::get();
        $indProject = Project::where('status', '=', 0)->where('projecttype', '=', 'CBP')->get();
        return view('fontend.commirsialProjects', compact('indProject', 'menu'));
    }

    public function portfolio($slug)
    {
        $menu= Menu::get();
        $Project = Project::where("slug", $slug)->get();
        dd($Project);
        return view('fontend.projectDetails', compact('Project', 'menu'));
    }

public function missionVission()
{
    dd('ok');
}

public function ourTeam()
{
    dd('ok');
}

public function ourExpertise()
{
    dd('ok');
}

public function strategicPartners()
{
    dd('ok');
}

public function enlistment()
{
    dd('ok');
}


public function contactus()
{
    $menu= Menu::get();
    return view('fontend.contactUs', compact('menu'));
}



}
