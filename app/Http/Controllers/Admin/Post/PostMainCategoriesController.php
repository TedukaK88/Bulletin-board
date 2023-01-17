<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class PostMainCategoriesController extends Controller
{
    //
    public function mainCategoryCreate(Request $request){
        // DD($request,$request->mainCategoryName);
            //------------ validation  -----------------------------
            $rules = [
                'mainCategoryName' => 'required|string|min:2|max:100|unique:post_main_categories,main_category'
            ];
            $validator = validator::make($request->all(),$rules);
            if($validator->fails()){
                // DD($request,$request->mainCategoryName);
                return redirect('/category')
                ->withErrors($validator)
                ->withInput();
            }else{
            //-------------------------------------------------------

            //----------  add record  -------------------------------
            // DD($request,$request->mainCategoryName);
            \DB::table('post_main_categories')->insert([
                'main_category' => $request->mainCategoryName
            ]);

            return redirect('/category');
            }
            //-------------------------------------------------------
    }

    public function mainCategoryDelete(Request $request){
        // DD($request,$request->main_category_id);
        \DB::table('post_main_categories')
            ->where('id',$request->main_category_id)
            ->update(['deleted_at' => date("Y-m-d H:i:s")]);

        return redirect('/category');
    }
}
