@extends('layouts.app')

@section('content')
<!-- =========================  route jump  =========================== -->
<!-- <h1 class="text-center">Top page</h1> -->

<!-- <div class="w-50 px-5 mx-auto my-5 border border-primary">
    <a href="/category">
        <h2>category</h2>
    </a>
    <a href="/post">
        <h2>post</h2>
    </a>
</div> -->
<div class="w-50 px-5 mx-auto my-5 border border-primary">
    <a href="/post_detail">
        <h2>post_detail</h2>
    </a>
</div>

<div class="error-message" style="margin-left: 30px; margin-bottom: 2rem;">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>
<!-- ====================================================================== -->


<!-- Content ================================================================================================================================ -->
<div class="main-wrapper" style="display: flex; justify-content: space-around;">
    <!-- Post ------------------------------------------------------------------------------------- -->
    <div class="post-list" style="width: 52.5%; border: 1px solid red;">
        <div class="post-wrapper" style="border:1px solid; padding:5%; padding-bottom:0; margin-bottom:10px;">
            <div class="post-header" style="display: flex; justify-content: space-between;">
                <p>○○さん</p>
                <p style="font-size:1.2rem">20XX年n月n日</p>
                <p>○○View</p>
            </div>
            <p>Post text</p>
            <div class="post-footer" style="display: flex; justify-content: space-between; font-size:1rem">
                <p style="position:relative; line-height:40px; padding-left:10px; padding-right:10px; background-color:#0075ff; color:#fff;">サブカテゴリー</p>
                <p style="position:relative; line-height:35px;">コメント数 5</p>
                <button style="position:relative; top:-15px; border:none; background-color:#FFF; color:red; font-size:2.5rem;">♥</button>
                <p style="font-size:1.4rem">10</p>
            </div>
        </div>

        <div class="post-wrapper" style="border:1px solid; padding:5%; padding-bottom:0; margin-bottom:10px;">
            <div class="post-header" style="display: flex; justify-content: space-between;">
                <p>○○さん</p>
                <p style="font-size:1.2rem">20XX年n月n日</p>
                <p>○○View</p>
            </div>
            <p>Post text</p>
            <div class="post-footer" style="display: flex; justify-content: space-between; font-size:1rem">
                <p style="position:relative; line-height:40px; padding-left:10px; padding-right:10px; background-color:#0075ff; color:#fff;">サブカテゴリー</p>
                <p style="position:relative; line-height:35px;">コメント数 5</p>
                <button style="position:relative; top:-15px; border:none; background-color:#FFF; color:red; font-size:2.5rem;">♥</button>
                <p style="font-size:1.4rem">10</p>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------ -->

    <!-- right sidebar -------------------------------------------------------------------------- -->
    <div class="search-wrapper" style="width: 45%; border: solid;">
        <button class="btn btn-danger" style="width:90%; background-color:red; margin-bottom:20px;"><a href="/category" style="color:#FFF; font-size:1.8rem;">カテゴリーを追加</a></button>
        <button class="btn btn-primary" style="width:40%; margin-bottom:20px;"><a href="/post" style="color:#FFF; font-size:1.8rem;">投稿</a></button>
        <form style="margin-bottom:20px;">
        <div class="search-wrapper" style="display:flex; justify-content: space-between;">
                <textarea style="height:2.5rem; width:50%; background-color:#eee;"></textarea>
                <button class="btn btn-primary" type="submit" style="position:relative; top:-9px; font-size:1.8rem; width:40%">検索</button>
        </div>
        </form>
        <button class="btn btn-primary" style="width:85%; margin-bottom:20px;"><a href="/post" style="color:#FFF; font-size:1.8rem;">いいねした投稿</a></button>
        <button class="btn btn-primary" style="width:85%; margin-bottom:20px;"><a href="/post" style="color:#FFF; font-size:1.8rem;">自分の投稿</a></button>
    </div>
    <!-- ------------------------------------------------------------------------------------------ -->
</div>
<!-- ================================================================================================================================ -->

@endsection