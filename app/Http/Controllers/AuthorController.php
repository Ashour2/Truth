<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors = Author::withCount('articles')->orderBy('id', 'desc')
            ->paginate(10);
        return response()->view('cms.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $cities = City::all();
        // $roles=Role::where('guard_name','author')->get();
        return response()->view('cms.author.create', compact('cities')); //,'roles'

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 🔹 1. قواعد التحقق
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|min:3|max:50',
            'last_name'  => 'required|string|min:3|max:50',
            'email'      => 'required|email|unique:authors,email',
            'password'   => 'required|string|',
            'mobile'     => 'required|string|',
            'address'     => 'required|string|',
            'date'       => 'required|date',
            'gender'     => 'required|in:male,female',
            'status'     => 'required|in:active,inactive',
            'city_id'    => 'required|exists:cities,id',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'role_id' => 'required|exists:roles,id', // اذا بدك تفعّل الدور
        ]);

        // 🔹 2. رجوع إذا في خطأ فالديشن
        if ($validator->fails()) {
            return response()->json([
                'icon'  => 'error',
                'title' => $validator->errors()->first(),
            ], 400);
        }

        // 🔹 3. إنشاء author
        $author = new Author();
        $author->email    = $request->get('email');
        $author->password = Hash::make($request->get('password'));
        $isSavedAuthor = $author->save();

        if ($isSavedAuthor) {
            // 🔹 4. إنشاء user مربوط بـ author
            $user = new User();

            // رفع الصورة إذا موجودة
            if ($request->hasFile('image')) {
                $image     = $request->file('image');
                $imageName = time() . '_author.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/images/author'), $imageName);
                $user->image = $imageName;
            }

            // بيانات المستخدم
            $user->first_name = $request->get('first_name');
            $user->last_name  = $request->get('last_name');
            $user->mobile     = $request->get('mobile');
            $user->address     = $request->get('address');
            $user->date       = $request->get('date');
            $user->gender     = $request->get('gender');
            $user->status     = $request->get('status');
            $user->city_id    = $request->get('city_id');

            // ربطه مع author (علاقة polymorphic)
            $user->actor()->associate($author);

            $user->save();

            // 🔹 5. نجاح العملية
            return response()->json([
                'icon'  => 'success',
                'title' => "Author created successfully",
            ], 200);
        }

        // 🔹 6. فشل غير متوقع
        return response()->json([
            'icon'  => 'error',
            'title' => "Something went wrong, please try again",
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $authors = Author::find($id);
        return response()->view('cms.author.show', compact('authors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $cities = City::all();
        $authors = Author::findOrFail($id);
        return response()->view('cms.author.edit', compact('cities', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator($request->all(), [

            'email' => 'unique:authors,email'
        ], [
            'email.unique' => 'البريد الإلكتروني موجود مسبقًا، الرجاء المحاولة مرة أخرى'
        ]);

        if (! $validator->fails()) {

            $authors = Author::findOrFail($id);
            $authors->email = $request->get('email');

            $isUpdated = $authors->save();

            if ($isUpdated) {
                $users = $authors->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/author', $imageName);
                    // $image->storeAs('storage/images/author', $imageName);

                    $users->image = $imageName;
                }

                $users->first_name = $request->get('first_name');
                $users->last_name = $request->get('last_name');
                $users->mobile = $request->get('mobile');
                $users->date = $request->get('date');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->city_id = $request->get('city_id');
                $users->actor()->associate($authors);
                $isSaved = $users->save();

                return ['redirect' => route('authors.index')];
            }
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $authors = Author::destroy($id);
    }
}
