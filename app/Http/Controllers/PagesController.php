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
        $institutes = Institute::all()->where('status', true)->sortByDesc('id')->take(6);
        $institutesWithLink = Institute::all()->take(6)->sortBy('status');


        return view('pages.index', compact('institutes', 'institutesWithLink'));
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
        $data = [
            'title' => 'Alphabets',
            'institutes' => Institute::all()->sortBy('title')
        ];
        //var_dump($data['institutes']);
        return view('pages.byDefault', compact('data'));
    }

    /**
     * search by Area redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byArea(){
        $data = [
            'title' => 'Area',
            'institutes' => Institute::all()->sortBy('address_id')

        ];

        return view('pages.byDefault', compact('data'));
    }

    /**
     * search by Category redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byCategory(){
        $data = [
            'title' => 'Category',
            'institutes' => Institute::all()->sortBy('category_id')

        ];

        return view('pages.byDefault', compact('data'));
    }

    public function testuni(){
        $institutes = Institute::all()->where('status', '=', true);
        return view('test', compact('institutes'));
    }

    public function debug(){

        $data = Category::find(1);

        return $data['name'];
    }
}
