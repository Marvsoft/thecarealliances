<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchApiController extends Controller
{
    function getAllZipcode(Request $request)
    {
        try {
            return DB::table('charch_address')->where('zip_code', $request->zip_code)->get();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function getCategory(Request $request)
    {
        try {
            return DB::table('charch_address')->where('category_id', $request->category_id)->get();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function searchCategory(Request $request)
    {
        try {
            return DB::table('charch_address')
                ->where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('address', 'LIKE', '%' . $request->search . '%')
                ->orWhere('city', 'LIKE', '%' . $request->search . '%')
                ->orWhere('state', 'LIKE', '%' . $request->search . '%')
                ->orWhere('zip_code', 'LIKE', '%' . $request->search . '%')
                ->get();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
