<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Institute;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    /**
     * Home page redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $uni = Institute::all()->where('status', true)->take(6);
        $in = Institute::all()->take(6)->sortBy('status');
        $categories = Category::all();


        return view('pages.index', compact('categories', 'uni', 'in'));
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

    public function testuni(){
        $uni = Institute::all()->where('status', '=', true);
        return view('test', compact('uni'));
    }

}
