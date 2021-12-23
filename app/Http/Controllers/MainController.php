<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    About,
    Advantage,
    Infrastructure,
    Project,
    Press,
    News,
    Partner,
    Contact,
    Social,
};

class MainController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $advantages = Advantage::all();
        $infrastructures = Infrastructure::all();
        $projects = Project::first();
        $presses = Press::all();
        $news = News::first();
        $partners = Partner::all();
        $contact = Contact::first();
        $socials = Social::all();

        return view('index', compact(
            'abouts', 
            'advantages',
            'infrastructures',
            'projects',
            'presses',
            'news',
            'partners',
            'contact',
            'socials',
        ));
    }

    public function getInfrastructure()
    {
        return view('infrastructurepage');
    }

    public function news()
    {
        return view('news');
    }

    public function getNews()
    {
        return view('news_single');
    }

    public function getProject()
    {
        return view('projects');
    }

    public function vacancies()
    {
        return view('vacancies');
    }

}
