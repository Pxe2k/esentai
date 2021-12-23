<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
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

    public function vacancy()
    {
        return view('vacancies');
    }

}
