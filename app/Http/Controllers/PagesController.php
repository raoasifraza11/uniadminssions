<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Institute;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
     * search by Alphabets redirection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function byAlpha(){
        $data = [
            'title' => 'Alphabets',
            //'institutes' => Institute::all()->sortBy('title')
            'institutes' => Institute::orderBy('name', 'asc')->paginate(5)

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
            'institutes' => Institute::orderBy('city_id', 'asc')->paginate(5)

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
            'institutes' => Institute::orderBy('category_id', 'asc')->paginate(5)

        ];

        return view('pages.byDefault', compact('data'));
    }

    public function search(Request $request){
        $categoryName = Category::find($request->category);
        $cityName = City::all()->where('name', $request->city)->first();
        $data = [
            'category_keyword' => $categoryName->name,
            'city_keyword' => $cityName->name,
            'institutes' => Institute::where('category_id', $categoryName->id)
                                             ->orWhere('city_id', $cityName->id)
                                            ->get()

        ];

        return view('pages.search', compact('data'));
    }

    /**
     * Debug the view output
     * @return mixed
     */
    public function debug(){

        $data = Category::find(1);

        return $data['name'];
    }

}
