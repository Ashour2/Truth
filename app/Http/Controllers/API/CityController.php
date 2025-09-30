<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        $cities = City::all();
        return response()->json([
            'status' => true,
            'message' => 'Data of City !',
            'data' => $cities,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string'
        ]);
        if (!$validator->fails()) {
            $cities = new City();
            $cities->name = $request->get('name');
            $cities->street = $request->get('street');
            $cities->country_id = $request->get('country_id');
            $isSaved = $cities->save();
            if ($isSaved) {
                return response()->json([
                    'status' => true,
                    'message' => 'Created Is Successfully',
                    // 'response'=>200
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Created Is Failed',
                    // 'response'=>400
                ], 400);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => $validator->getMessageBag()->first(),
                // 'response'=>400
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cities = City::find($id);
        return response()->json([
            'status' => true,
            'message' => 'Data of specific City !',
            'data' => $cities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string'
        ]);
        if (!$validator->fails()) {
            $cities = City::findOrFail($id); //to know your updated object
            $cities->name = $request->get('name');
            $cities->street = $request->get('street');
            $cities->country_id = $request->get('country_id');
            $isUpdate = $cities->save();
            if ($isUpdate) {
                return response()->json([
                    'status' => true,
                    'message' => 'Updated Is Successfully',
                    // 'response'=>200
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Updated Is Failed',
                    // 'response'=>400
                ], 400);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => $validator->getMessageBag()->first(),
                // 'response'=>400
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::find($id);

        if (!$city) {
            return response()->json([
                'status' => false,
                'message' => 'City not found'
            ], 404);
        }

        $city->delete();

        return response()->json([
            'status' => true,
            'message' => 'Deleted successfully!'
        ], 200);
    }
}
