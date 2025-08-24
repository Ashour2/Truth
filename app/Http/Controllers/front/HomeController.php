<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $sliders = Slider::take(3)->get();
        $articles = Article::orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::where('status', 'active')->take(3)->get();
        return response()->view('news.index', compact('categories', 'sliders', 'articles'));
    }

    public function allNews($id){

        $categories = Category::withCount('articles')->findOrFail($id);
        $articles = Article::where('category_id' , $id)->paginate(4);
        return response()->view('news.all-news' , compact('categories' , 'articles'));
    }

    public function detailes($id){


        $comments = Comment::take(3)->get();

        $articles = Article::findOrFail($id);
        return response()->view('news.newsdetailes' , compact('articles','comments'));
    }

    public function showContact(){

        return response()->view('news.contact');
    }

    public function storeContact(Request $request){

        $validator = Validator($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',

        ], []);

        if (!$validator->fails()) {
            $contacts = new Contact();
            $contacts->name = $request->input('name');
            $contacts->phone = $request->input('phone');
            $contacts->email = $request->input('email');
            $contacts->message = $request->input('message');

            $isSaved = $contacts->save();
            return response()->json([
                'icon' => 'success',
                'title' => 'Contact is Successfully'
            ], 200);
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ], 400);
        }

    }
    public function storeComment(Request $request){

        $validator = Validator($request->all(), [
            'name' => 'required',
        ], []);

        if (!$validator->fails()) {
            $comments = new Comment();
            $comments->name = $request->input('name');


            $isSaved = $comments->save();
            return response()->json([
                'icon' => 'success',
                'title' => 'Comment created  Successfully'
            ], 200);
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ], 400);
        }

    }
}
