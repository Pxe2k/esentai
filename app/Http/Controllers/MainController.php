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
    NewsDetail,
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
        $news = News::all();
        
        return view('news', compact(
            'news'
        ));
    }

    public function getNews($id)
    {
        $news = News::find($id);
        $detail = NewsDetail::where('news_id', $id)->get();

        return view('news_single', compact(
            'news',
            'detail',
        ));
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
