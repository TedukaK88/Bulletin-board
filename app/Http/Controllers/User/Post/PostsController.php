<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function topView()
    {
        return view('main.top');
    }


    public function categoryView()
    {
        return view('main.category');
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
