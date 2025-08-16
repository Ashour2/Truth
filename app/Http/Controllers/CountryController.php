<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $countries = Country::all();
        return response()->view('cms.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('cms.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|numeric|digits:3',
        ], [
            'name.required' => 'اسم الدولة مطلوب',
            'code.required' => 'كود الدولة مطلوب'
        ]);

        if (!$validator->fails()) {
            $countries = new Country();
            $countries->name = $request->get('name');
            $countries->code = $request->get('code');
            $isSaved = $countries->save();

            if ($isSaved) {

                return response()->json(['icon' => "success", "title" => 'Created Country is Successfuly'], 200);
                 redirect()->back();
            }

        } else {
            return response()->json(['icon' => "error", "title" => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $countries = Country::find($id);
        return response()->view('cms.country.show', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $countries  = Country::findOrFail($id);
        return response()->view('cms.country.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = Validator($request->all(), [
            'name' => 'sometimes|required|string|min:3|max:20',
            'code' => 'sometimes|required|numeric|digits:4',
        ], [
            'name.required' => 'اسم الدولة مطلوب',
            'code.required' => 'كود الدولة مطلوب',
            'code.numeric' => 'الرمز لا يقبل حروف ( فقط أرقام )'

        ]);

        if (!$validator->fails()) {
            $countries =  Country::findOrFail($id);
            $countries->name = $request->get('name');
            $countries->code = $request->get('code');

            $isUpdated = $countries->save();

            return ['redirect' => route('countries.index')];
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
        $countries = Country::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is successfully'], 200);
    }
}
