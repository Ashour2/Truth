<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Author;
use App\Models\Admin;
use App\Models\City;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Category;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $countries  = Country::where('name', 'like', "%{$query}%")->get();
        $authors = Author::whereHas('user', function ($q) use ($query) {
            $q->where('first_name', 'like', "%{$query}%")
                ->orWhere('last_name', 'like', "%{$query}%");
        })->get();

        $admins = Admin::whereHas('user', function ($q) use ($query) {
            $q->where('first_name', 'like', "%{$query}%")
                ->orWhere('last_name', 'like', "%{$query}%");
        })->get();

        $cities     = City::where('name', 'like', "%{$query}%")
            //   ->orWhere('street', 'like', "%{$query}%")
            ->get();
        $articles   = Article::where('title', 'like', "%{$query}%")
            ->orWhere('short_description', 'like', "%{$query}%")
            ->orWhere('full_description', 'like', "%{$query}%")
            ->get();
        $comments   = Comment::where('name', 'like', "%{$query}%")->get();
        $contacts   = Contact::where('name', 'like', "%{$query}%")
            ->orWhere('message', 'like', "%{$query}%")
            ->get();
        $sliders    = Slider::where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();
        $categories = Category::where('name', 'like', "%{$query}%")->get();

        return view('search.results', compact(
            'countries',
            'authors',
            'admins',
            'cities',
            'articles',
            'comments',
            'contacts',
            'sliders',
            'categories',
            'query'
        ));
    }
}
