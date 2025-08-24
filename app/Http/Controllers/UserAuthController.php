<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{


    public function showLogin($guard)
    {
        return response()->view('cms.auth.login', compact('guard'));
    }

    public function loginType()
    {
        return response()->view('cms.auth.loginType');
    }

    public function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|min:6'
        ]);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ];

        if (!$validator->fails()) {
            if (Auth::guard($request->get('guard'))->attempt($credentials)) {
                return response()->json([
                    'icon' => 'success',
                    'title' => 'Login IS Successfully'
                ], 200);
            } else {
                return response()->json([
                    'icon' => 'error',
                    'title' => 'Login is Failed'
                ], 400);
            }
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ], 400);
        }
    }

    public function logout(Request $request)
    {
        $guard = auth('admin')->check() ? 'admin' : 'author';
        Auth::guard($guard)->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login',$guard);
    }
    public function changePassword(Request $request)
    {
        return response()->view('cms.admin.changePassword');
    }

    public function updatePassword(Request $request){
       $guard=auth('admin')->check() ? 'admin' : 'author' ;
        $validator=Validator($request->all(),[
         'current_password'=>'required'.$guard,
         'new_password'=>'required|confirmed',
         'new_password_confirmation'=>'required|string',

        ],[

        ]);
        if(!$validator->fails()){
            $user=auth($guard)->user();
            $user->password=Hash::make($request->get('new_password'));

            $isSaved=$user->save();

            return response()->json([
                'icon'=> $isSaved ? 'success' : 'error',
                'title'=> $isSaved ? 'success' : 'error'
            ],$isSaved ? 200 : 400);
        }else{
            return response()->json([
            'icon'=>'error',
            'title'=>$validator->getMessageBag()->first()
            ]);
        }

    }

    public function editProfile(Request $request)
    {
        if(Auth::guard('admin')->id()){
            $cities = City::all();
        $admins = Admin::findOrFail(Auth::guard('admin')->id());
        return response()->view('cms.admin.edit' , compact('cities' , 'admins'));

        }elseif(Auth::guard('author')->id()){
            $cities = City::all();
        $authors = Author::findOrFail(Auth::guard('author')->id());
        return response()->view('cms.author.edit' , compact('cities' , 'authors'));

        }

            }

    public function updateProfile(Request $request)
    {
        $validator = Validator($request->all() , [


        ]);

        if(! $validator->fails()){

            $admins = Admin::findOrFail(Auth::guard('admin')->id());
            $admins->email = $request->get('email');

            $isUpdated = $admins->save();

            if($isUpdated){
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

    public function profile(Request $request)
    {
     //   return view('profile', compact('user'));

        if(Auth::guard('admin')->id()){
            $cities = City::all();
        $admins = Admin::findOrFail(Auth::guard('admin')->id());
        return response()->view('cms.admin.show' , compact('cities' , 'admins'));

        }elseif(Auth::guard('author')->id()){
            $cities = City::all();
        $authors = Author::findOrFail(Auth::guard('author')->id());
        return response()->view('cms.author.show0' , compact('cities' , 'authors'));

        }
    }

}




