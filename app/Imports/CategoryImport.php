<?php

namespace App\Imports;

use App\Models\{CharchAddress,CharchCategory};
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class CategoryImport implements ToModel, WithHeadingRow 
{
    public function model(array $row)
    {
        try{
            // CharchAddress::where();
            $category = CharchCategory::orderBy('id','DESC')->first();
            $newCat = [
            'category_id'  => $category + 1 ,
            'category_name' => 'New Category' + 1,
            ];
            CharchCategory::create($newCat);

            //
            if(isset($row['name']) && isset($row['address'])){
                $charch = CharchAddress::where(function($query) use($row){
                    $query->where('name',$row['name']);
                    $query->where('address',$row['address']);
                })->first();
                //$user = User::where('email','LIKE',"%$row[3]%")->where('phone_number',$row[2])->first();
                if(empty($charch)){
                    $charch =  CharchAddress::create([
                        'name'  => isset($row['name']) ? $row['name'] : '',
                        'address'  => isset($row['address']) ? $row['address'] : '',
                        'city'    => isset($row['city']) ? $row['city'] : '',
                        'state'  => isset($row['state']) ? $row['state'] : '',
                        'zip_code'  => isset($row['zip_code']) ? $row['zip_code'] : '',
                        'phone'  => isset($row['phone']) ? $row['phone'] : '',
                        'category_id'  => isset($row['category_id']) ? $row['category_id'] : '',
                    ]);
                    
                    // Sens Mail For User { $row['email'] }
                }
            }
        }catch(\Exception $e){
            dd($e);
           return Helper::apiResponseCatch(); 
        }

    }
}
