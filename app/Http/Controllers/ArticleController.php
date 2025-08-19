<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of articles by author.
     */
    public function indexArticle($id)
    {
        $authors = Author::findOrFail($id);
        $articles = Article::where('author_id', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('cms.article.index', compact('articles', 'authors', 'id'));
    }

    /**
     * Show the form for creating a new article (with specific author).
     */
    public function createArticle($id)
    {
        $categories = Category::where('status', 'active')->get();
        $authors = Author::all();

        return view('cms.article.create', compact('categories', 'authors', 'id'));
    }

    /**
     * Display all articles.
     */
        public function index(Request $request)
    {
        $articles = Article::orderBy('id', 'desc');
        if($request->get('title')){
            $articles =Article::where('title', 'like', '%' . $request->title . '%') ;
        }
        if($request->get('short_description')){
            $articles =Article::where('short_description', 'like', '%' . $request->short_description . '%') ;
        }

       $articles =$articles->paginate(10);
        return response()->view('cms.article.indexALl', compact('articles'));
    }

    // public function index()
    // {
    //     $articles = Article::orderBy('id', 'desc')->paginate(10);
    //     return view('cms.article.indexAll', compact('articles'));
    // }

    /**
     * Show the form for creating a new article.
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->get();
        $authors = Author::all();

        return view('cms.article.create', compact('categories', 'authors'));
    }

    /**
     * Store a newly created article.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->errors()->first()
            ], 400);
        }

        $article = new Article();
        $article->title = $request->title;
        $article->short_description = $request->short_description;
        $article->full_description = $request->full_description;
        $article->category_id = $request->category_id;
        $article->author_id = $request->author_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . 'image.' . $image->getClientOriginalExtension();
            $image->move('storage/images/article', $imageName);
            $article->image = $imageName;
        }

        $article->save();

        return response()->json([
            'icon' => 'success',
            'title' => 'Created successfully'
        ], 200);
    }

    /**
     * Display the specified article.
     */
    public function show($id)
    {
        $articles = Article::findOrFail($id);
        return view('cms.article.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified article.
     */
    public function edit($id)
    {
        $categories = Category::where('status', 'active')->get();
        $authors = Author::all();
        $articles = Article::findOrFail($id);

        return view('cms.article.edit', compact('categories', 'authors', 'articles'));
    }

    /**
     * Update the specified article.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->errors()->first()
            ], 400);
        }

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->short_description = $request->short_description;
        $article->full_description = $request->full_description;
        $article->category_id = $request->category_id;
        $article->author_id = $request->author_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . 'image.' . $image->getClientOriginalExtension();
            $image->move('storage/images/article', $imageName);
            $article->image = $imageName;
        }

        $article->save();

        return response()->json([
            'icon' => 'success',
            'title' => 'Updated successfully',
            'redirect' => route('articles.index')
        ], 200);
    }

    /**
     * Remove the specified article.
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return response()->json([
            'icon' => 'success',
            'title' => 'Deleted successfully'
        ], 200);
    }
}
