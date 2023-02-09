@extends('layouts.app')

@section('content')
<!-- =========================  content  =========================== -->

    <!-- <h1 class="text-center">Post page</h1>
    <div class="w-50 px-5 mx-auto my-5 border border-primary">
        <a href="/top">
            <h2>top</h2>
        </a>
    </div> -->

    <div class="error-message" style="margin-left: 30px; margin-bottom: 2rem;">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
<!-- =========================  content  =========================== -->


<!-- ============  post-create-wrapper  ======================================================================================== -->
    <div class="post-create-wrapper" style="position:relative; width:70%; margin-left:7.5%;">
        <form>
            <p>サブカテゴリー</p>
            <select class="mainCategorySelect" id="subCategoryCreate" name="mainCategoryId" class="border border-secondary" style="width: 100%; height: 2.5rem; overflow: hidden; background-color:#eee;">
                <option value=""></option>
            </select>

            <p style="margin-top:3rem;">タイトル</p>
            <input type="textarea" class="border border-secondary" style="background-color:#eee; width:100%;">

            <p style="margin-top:4rem;">投稿内容</p>
            <input type="textarea" class="border border-secondary" style="background-color:#eee; width:100%; height:12rem;">
            <br>
            <button type="submit" class="btn btn-danger" style="background-color:red; width:100%; margin-top:3rem; font-size:1.4rem;">投稿</button>
        </form>
    </div>
<!-- ============  post-create-wrapper  ======================================================================================== -->

@endsection