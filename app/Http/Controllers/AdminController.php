<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admins = Admin::all();
        return response()->view('cms.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cities = City::all();
        // $roles=Role::where('guard_name','admin')->get();
        return response()->view('cms.admin.create', compact('cities')); //,'roles'

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
            'email'      => 'required|email|unique:admins,email',
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

        // 🔹 3. إنشاء admin
        $admin = new Admin();
        $admin->email    = $request->get('email');
        $admin->password = Hash::make($request->get('password'));
        $isSavedAdmin = $admin->save();

        if ($isSavedAdmin) {
            // 🔹 4. إنشاء user مربوط بـ admin
            $user = new User();

            // رفع الصورة إذا موجودة
            if ($request->hasFile('image')) {
                $image     = $request->file('image');
                $imageName = time() . '_admin.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/images/admin'), $imageName);
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

            // ربطه مع admin (علاقة polymorphic)
            $user->actor()->associate($admin);

            $user->save();

            // 🔹 5. نجاح العملية
            return response()->json([
                'icon'  => 'success',
                'title' => "Admin created successfully",
            ], 200);
        }

        // 🔹 6. فشل غير متوقع
        return response()->json([
            'icon'  => 'error',
            'title' => "Something went wrong, please try again",
        ], 500);
    }
    //


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $admins = Admin::find($id);
        return response()->view('cms.admin.show', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $cities = City::all();
        $admins = Admin::findOrFail($id);
        return response()->view('cms.admin.edit', compact('cities', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validator = Validator($request->all(), [

            'email' => 'unique:admins,email'
        ], [
            'email.unique' => 'البريد الإلكتروني موجود مسبقًا، الرجاء المحاولة مرة أخرى'
        ]);

        if (! $validator->fails()) {

            $admins = Admin::findOrFail($id);
            $admins->email = $request->get('email');

            $isUpdated = $admins->save();

            if ($isUpdated) {
                $users = $admins->user;

                if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/admin', $imageName);
                    // $image->storeAs('storage/images/admin', $imageName);

                    $users->image = $imageName;
                }

                $users->first_name = $request->get('first_name');
                $users->last_name = $request->get('last_name');
                $users->mobile = $request->get('mobile');
                $users->date = $request->get('date');
                $users->gender = $request->get('gender');
                $users->status = $request->get('status');
                $users->city_id = $request->get('city_id');
                $users->actor()->associate($admins);
                $isSaved = $users->save();

                return ['redirect' => route('admins.index')];
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
        $admins = Admin::destroy($id);
    }
}
