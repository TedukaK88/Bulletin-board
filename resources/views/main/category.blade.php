@extends('layouts.app')

@section('content')
<!-- =========================  content  =========================== -->

<h1 class="text-center">Category page</h1>
<div class="w-50 px-5 mx-auto my-5 border border-primary">
    <a href="/top">
        <h2>top</h2>
    </a>
</div>
<div class="error-message" style="margin-left: 30px; margin-bottom: 2rem; color: red; font-weight: bold;">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>


<div class="container d-flex" style="justify-content: space-between;">
    <!-- ---------------  カテゴリー作成  --------------------------------------------------------------------------------------- -->
    <div style="width: 57.5%">
        <div class="main-category">
            <p>新規メインカテゴリー</p>
            <form action="{{ route('mainCategoryCreate') }}" method="post" id="mainCategoryCreate">
            @csrf
            <input type="text" form="mainCategoryCreate" class="border border-secondary" style="width: 100%; height: 2.5rem; margin-bottom:10px; overflow: hidden; background-color: rgb(240,240,240);" name="mainCategoryName"></input>
            <input type="submit" class="btn btn-danger" style="width: 100%; height:3.2rem; font-size:1.5rem; vertical-align: middle;" value="登録" form="mainCategoryCreate">
            </form>
        </div>

        <div class="sub-category" style="margin-top: 4rem;">
            <form action="{{ route('subCategoryCreate') }}" method="post" id="subCategoryCreate">
            <p>メインカテゴリー</p>
            <select class="mainCategorySelect" id="subCategoryCreate" name="mainCategoryId" class="border border-secondary" style="width: 100%; height: 2.5rem; overflow: hidden; background-color: rgb(240,240,240);">
                <option value=""></option>
                @foreach($mainCategories as $mainCategory)
                <option value="{{$mainCategory->id}}">{{$mainCategory->main_category}}</option>
                @endforeach
            </select>
            <p style="margin-top:20px;">新規サブカテゴリー</p>
            @csrf
            <input type="text" form="subCategoryCreate" class="border border-secondary" style="width: 100%; height: 2.5rem; margin-bottom:10px; overflow: hidden; background-color: rgb(240,240,240);" name="subCategoryName"></input>
            <button type="submit" class="btn btn-danger" style="width: 100%; height: 3rem; font-size:1.5rem;" form="subCategoryCreate">登録</button>
            </form>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------------------------------------------------------- -->

    <!-- ---------------  カテゴリー一覧  --------------------------------------------------------------------------------------- -->
    <div class="categories-list border border-secondary" style="width: 40%">
        <p>カテゴリー一覧</p>
        <list>
            <ul>main-category1
                <div class="d-flex"><li>sub-category1</li><button class="delete">削除</button></div>
                <div class="d-flex"><li>sub-category1</li><button class="delete">削除</button></div>
            </ul>
            <ul>main-category2
            <div class="d-flex"><li>sub-category1</li><button class="delete">削除</button></div>
            <div class="d-flex"><li>sub-category1</li><button class="delete">削除</button></div>
            <div class="d-flex"><li>sub-category1</li><button class="delete">削除</button></div>
            </ul>
            <div class="d-flex"><ul>main-category3</ul><button class="delete">削除</button></div>
        </list>
    </div>
    <!-- ----------------------------------------------------------------------------------------------------------------------- -->
</div>

<p style="margin-top:3rem; color: red;">$mainCategories</p>
<p style="color: red;">{{$mainCategories}}</p>
<p style="margin-top:3rem; color: blue;">$subCategories</p>
<p style="color: blue;">{{$subCategories}}</p>
<!-- =========================  content  =========================== -->
@endsection