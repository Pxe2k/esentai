<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    About,
    Advantage,
    Infrastructure,
    Project,
    ProjectDetail,
    ProjectPhoto,
    Press,
    News,
    NewsDetail,
    Partner,
    Contact,
    Social,
    Vacancy,
    VacancyMission,
    VacancyValue,
};

use App;

class MainController extends Controller
{
    public function index()
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {            
        $locale = session(['locale' => 'fr']);
            App::setLocale('fr');
        }

        $abouts = About::all()->translate(session('locale'));
        $advantages = Advantage::all()->translate(session('locale'));
        $infrastructures = Infrastructure::all()->translate(session('locale'));
        $projects = Project::all()->translate(session('locale'));
        $presses = Press::all();
        $news = News::all()->translate(session('locale'));
        $partners = Partner::all();
        $contact = Contact::first()->translate(session('locale'));
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
        $contact = Contact::first()->translate(session('locale'));

        return view('infrastructurepage', compact(
            'contact'
        ));
    }

    public function news()
    {       
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {            
            $locale = session(['locale' => 'fr']);
            App::setLocale('fr');
        }

        $news = News::all()->translate(session('locale'));
        $contact = Contact::first()->translate(session('locale'));
        
        return view('news', compact(
            'news',
            'contact'
        ));
    }

    public function getNews($id)
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {            
            $locale = session(['locale' => 'fr']);
            App::setLocale('fr');
        }

        $news = News::find($id)->translate(session('locale'));
        $detail = NewsDetail::where('news_id', $id)->first()->translate(session('locale'));
        $contact = Contact::first()->translate(session('locale'));

        return view('news_single', compact(
            'news',
            'detail',
            'contact',
        ));
    }

    public function getProject($id)
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {            
            $locale = session(['locale' => 'fr']);
            App::setLocale('fr');
        }

        $project = Project::find($id)->translate(session('locale'));
        $detail = ProjectDetail::where('project_id', $id)->first()->translate(session('locale'));
        $photos = ProjectPhoto::where('project_id', $id)->get()->translate(session('locale'));
        $contact = Contact::first()->translate(session('locale'));

        return view('projects', compact( 
            'project',
            'detail',
            'photos',
            'contact'
        ));
    }

    public function vacancies()
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {            
            $locale = session(['locale' => 'fr']);
            App::setLocale('fr');
        }

        $mission = VacancyMission::first()->translate(session('locale'));
        $values = VacancyValue::all()->translate(session('locale'));
        $vacancies = Vacancy::all()->translate(session('locale'));
        $contact = Contact::first()->translate(session('locale'));

        return view('vacancies', compact(
            'mission',
            'values',
            'vacancies',
            'contact'
        ));
    }

    public function infrastructures(Request $request)
    {
        $language = $request->header('accept-language');

        $infrastructures = Infrastructure::all()->translate($language);

        return response([
            'infrastructures' => $infrastructures
        ]);
    }

}
