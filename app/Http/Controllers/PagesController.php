<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Home page redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('pages.index');
    }


    /**
     * About page redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about(){
        return view('pages.about-us');
    }

    /**
     * contact page redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(){
        return view('pages.contact-us');
    }

    /**
     * Search page redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(){
        return view('pages.search-list');
    }

    /**
     * search by Alphabets redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byAlpha(){
        return view('pages.byAlpha');
    }

    /**
     * search by Area redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byArea(){
        return view('pages.byAlpha');
    }

    /**
     * search by Category redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byCategory(){
        return view('pages.byAlpha');
    }

}
