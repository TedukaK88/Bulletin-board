@extends('layouts.app')

@section('content')
<!-- =========================  content  =========================== -->

<h1 class="text-center">Top page</h1>

<div class="w-50 px-5 mx-auto my-5 border border-primary">
    <a href="/category">
        <h2>category</h2>
    </a>
    <a href="/post">
        <h2>post</h2>
    </a>
</div>
<div class="w-50 px-5 mx-auto my-5 border border-primary">
    <a href="/post_detail">
        <h2>post_detail</h2>
    </a>
</div>

<!-- =========================  content  =========================== -->
@endsection