<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    //
    public function topView()
    {
        return view('main.top');
    }


    public function categoryView()
    {
        //---  削除されていない mainCategories , subcategories のみ取得
        $mainCategories = \DB::table('post_main_categories')->where('deleted_at','=',null)->get();
        $subCategories = \DB::table('post_sub_categories')->where('deleted_at','=',null)->get();
        return view('main.category',compact('mainCategories','subCategories'));
    }

    public function postView()
    {
        return view('main.post');
    }


    public function post_detailView()
    {
        return view('main.post_detail');
    }


    public function post_editView()
    {
        return view('main.post_edit');
    }


    public function comment_editView()
    {
        return view('main.comment_edit');
    }
}
