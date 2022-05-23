<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Models\{
    About,
    Advantage,
    Infrastructure,
    InfrastructureDetail,
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
    Callback,
    Module,
};

class MainController extends Controller
{
    public function index()
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {
            $locale = session(['locale' => 'ru']);
            App::setLocale('ru');
        }

        $abouts          = About::all()
                                ->translate(session('locale'))
        ;
        $advantages      = Advantage::all()
                                    ->translate(session('locale'))
        ;
        $infrastructures = Infrastructure::all()
                                         ->translate(session('locale'))
        ;
        $projects        = Project::all()
                                  ->translate(session('locale'))
        ;
        $presses         = Press::all();
        $news            = News::all()
                               ->translate(session('locale'))
        ;
        $partners        = Partner::all();
        $contact         = Contact::first()
                                  ->translate(session('locale'))
        ;
        $socials         = Social::all();
        $module          = Module::first();


        foreach ($partners as $partner) {
            if (json_decode($partner->image, true)) {
                $partner->image = json_decode($partner->image, true)[0]['download_link'];
            }
        }

        return view(
            'index', compact(
            'abouts',
            'advantages',
            'infrastructures',
            'projects',
            'presses',
            'news',
            'partners',
            'contact',
            'socials',
            'module',
            'locale'
        )
        );
    }

    public function getInfrastructure()
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {
            $locale = session(['locale' => 'ru']);
            App::setLocale('ru');
        }

        $infrastructureDetail = InfrastructureDetail::first()
                                                    ->translate(session('locale'))
        ;
        $socials              = Social::all();
        $contact              = Contact::first()
                                       ->translate(session('locale'))
        ;

        return view(
            'infrastructurepage', compact(
            'infrastructureDetail',
            'socials',
            'contact',
            'locale',
        )
        );
    }

    public function news()
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {
            $locale = session(['locale' => 'ru']);
            App::setLocale('ru');
        }

        $news    = News::all()
                       ->translate(session('locale'))
        ;
        $socials = Social::all();
        $contact = Contact::first()
                          ->translate(session('locale'))
        ;

        return view(
            'news', compact(
            'news',
            'contact',
            'socials',
            'locale'

        )
        );
    }

    public function getNews($id)
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {
            $locale = session(['locale' => 'ru']);
            App::setLocale('ru');
        }

        $news    = News::find($id)
                       ->translate(session('locale'))
        ;
        $socials = Social::all();
        $detail  = NewsDetail::where('news_id', $id)
                             ->first()
                             ->translate(session('locale'))
        ;
        $contact = Contact::first()
                          ->translate(session('locale'))
        ;

        return view(
            'news_single', compact(
            'news',
            'socials',
            'detail',
            'contact',
            'locale'
        )
        );
    }

    public function getProject($id)
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {
            $locale = session(['locale' => 'ru']);
            App::setLocale('ru');
        }

        $project = Project::find($id)
                          ->translate(session('locale'))
        ;
        $socials = Social::all();
        $detail  = ProjectDetail::where('project_id', $id)
                                ->first()
                                ->translate(session('locale'))
        ;
        $photos  = ProjectPhoto::where('project_id', $id)
                               ->get()
                               ->translate(session('locale'))
        ;
        $contact = Contact::first()
                          ->translate(session('locale'))
        ;

        return view(
            'projects', compact(
            'project',
            'socials',
            'detail',
            'photos',
            'contact',
            'locale'
        )
        );
    }

    public function vacancies()
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            App::setLocale($locale);
        } else {
            $locale = session(['locale' => 'ru']);
            App::setLocale('ru');
        }

        $mission   = VacancyMission::first()
                                   ->translate(session('locale'))
        ;
        $socials   = Social::all();
        $values    = VacancyValue::all()
                                 ->translate(session('locale'))
        ;
        $vacancies = Vacancy::all()
                            ->translate(session('locale'))
        ;
        $contact   = Contact::first()
                            ->translate(session('locale'))
        ;

        return view(
            'vacancies', compact(
            'mission',
            'values',
            'socials',
            'vacancies',
            'contact',
            'locale'
        )
        );
    }

    public function callback(Request $request)
    {
        $callback = Callback::create([
                                         'name'    => $request->name,
                                         'phone'   => $request->phone,
                                         'email'   => $request->email,
                                         'comment' => $request->comment,
                                     ]);

        \Mail::to('info@esentaitower.com')
             ->send(new \App\Mail\Callback($callback))
        ;

        return redirect()->back();
    }

    public function infrastructures(Request $request)
    {
        $language = $request->header('accept-language');

        $infrastructures = Infrastructure::orderBy('order', 'asc')
                                         ->get()
                                         ->translate($language)
        ;

        return response([
                            'infrastructures' => $infrastructures,
                        ]);
    }

}
