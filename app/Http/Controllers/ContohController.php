<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contoh;
use App\Review;

class ContohController extends Controller{
    
    public function getData()
    {

    	$data = Contoh::get();

    	return response()->json([
    		'status' => 'ok',
            'data' => $data,
        ], 200);
    }

    public function getDataRekomendasi()
    {

    	$data = Contoh::where("category", "rekomendasi")->get();

    	return response()->json([
    		'status' => 'ok',
            'data' => $data,
        ], 200);
    }

    public function filterData(Request $request)
    {

        $data = Contoh::select("*");

        if ($request['type'] != null) {
            $data = $data->where('type', $request["type"]);
        }

        if ($request['address'] != null) {
            $data = $data->where('address', 'ILIKE', '%' .$request["address"]. '%');
        }

        if ($request['price'] != null) {
            $data = $data->OrderBy("price", $request["price"]);
        }

        $data = $data->get();
        
        return response()->json([
            'status' => 'ok',
            'total' => $data->count(),
            'data' => $data,
        ], 200);
    }

    public function getImg(Request $request)
    {

        $data = Review::where("coba_id", $request["id"])->get();

        return response()->json([
            'status' => 'ok',
            'data' => $data,
        ], 200);
    }

}