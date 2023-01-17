<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class PostSubCategoriesController extends Controller
{
    //
    public function subCategoryCreate(Request $request){
        // DD($request,$request->mainCategoryId,$request->subCategoryName);
            //------------ validation  -----------------------------
            $rules = [
                'mainCategoryId' => 'required|exists:post_main_categories,id',      //課題：deleted_at != null のレコードでも対象に含まれてしまう
                'subCategoryName' => 'required|string|min:2|max:100|unique:post_sub_categories,sub_category'
            ];
            $validator = validator::make($request->all(),$rules);
            if($validator->fails()){
                // DD($request,$request->mainCategoryId,$request->subCategoryName);
                return redirect('/category')
                ->withErrors($validator)
                ->withInput();
            }else{
            //-------------------------------------------------------

            //----------  add record  -------------------------------
            // DD($request,$request->mainCategoryId,$request->subCategoryName);
            \DB::table('post_sub_categories')->insert([
                'post_main_category_id' => $request->mainCategoryId,
                'sub_category' => $request->subCategoryName
            ]);

            return redirect('/category');
            }
            //-------------------------------------------------------
    }

    public function subCategoryDelete(Request $request){
        // DD($request,$request->sub_category_id,date("Y-m-d H:i:s"));
        \DB::table('post_sub_categories')
            ->where('id',$request->sub_category_id)
            ->update(['deleted_at' => date("Y-m-d H:i:s")]);

        return redirect('/category');
    }
}
