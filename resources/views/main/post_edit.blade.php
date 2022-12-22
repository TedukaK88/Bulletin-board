@extends('layouts.app')

@section('content')
<!-- =========================  content  =========================== -->

<h1 class="text-center">Post_edit page</h1>
<div class="w-50 px-5 mx-auto my-5 border border-primary">
    <a href="/top">
        <h2>top</h2>
    </a>
</div>
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
<!-- =========================  content  =========================== -->
@endsection