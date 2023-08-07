<?php

namespace Devi\UI\Http\Controllers;

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
        $category = $request->input('category');
        $zipcode = $request->input('location');
        $search = $request->input('search');

        if (isset($category) && !isset($zipcode)) {
            $search =  DB::table('charch_address')
                ->where('category_id', 'LIKE', '%' . $category . '%')
                ->get();

            return view('ui::front.search', compact('search'));
        }

        if (!isset($category) && isset($zipcode)) {
            $search =  DB::table('charch_address')
                ->Where('zip_code', 'LIKE', '%' . $zipcode . '%')
                ->get();

            return view('ui::front.search', compact('search'));
        }

        $search =  DB::table('charch_address')
            ->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('address', 'LIKE', '%' . $search . '%')
            ->orWhere('city', 'LIKE', '%' . $search . '%')
            ->orWhere('state', 'LIKE', '%' . $search . '%')
            ->orWhere('zip_code', 'LIKE', '%' . $search . '%')
            ->get();

        return view('ui::front.search', compact('search'));
    }
}
