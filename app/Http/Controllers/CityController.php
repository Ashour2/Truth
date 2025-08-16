<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $countries=Country::all();
         $cities = City::all();
        return response()->view('cms.city.index' , compact('cities','countries'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       $countries = Country::all();
        return response()->view('cms.city.create' , compact('countries'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:20',
            'street' => 'required',
        ], [
            'name.required' => 'اسم المدينة مطلوب',
            'street.required' => 'كود المدينة مطلوب'
        ]);

        if( ! $validator->fails()){
            $cities = new City();
            $cities->name = $request->input('name');
            $cities->street = $request->input('street');
            $cities->country_id = $request->input('country_id');

            $isSaved = $cities->save();
            return response()->json([
                'icon' => 'success' ,
                'title' => 'Created is Successfully'
            ] , 200);

            // session()->flash('success', 'The New City Is Added Successfly !');
            //         return redirect()->back();

        }
        else{
            return response()->json([
                'icon' => 'error' ,
                'title' => $validator->getMessageBag()->first(),
            ] , 400);

            // session()->flash('error',$validator->getMessageBag()->first() );
            //         return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cities = City::find($id);
        return response()->view('cms.city.show', compact('cities'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $countries = Country::all();
        $cities = City::findOrFail($id);

        return response()->view('cms.city.edit' , compact('cities' , 'countries'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $validator = Validator($request->all() , [

        ] , [

        ]);

        if( ! $validator->fails()){
            $cities = City::findOrFail($id);
            $cities->name = $request->input('name');
            $cities->street = $request->input('street');
            $cities->country_id = $request->input('country_id');

            $isUpdated = $cities->save();

            return ['redirect' => route('cities.index')];
        }
        else{
            return response()->json([
                'icon' => 'error' ,
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
        $cities = City::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is successfully'], 200);

    }
}
