@extends('layouts.profile')

@section('title', 'プロフィール編集画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集画面</h2>
                <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
                </form>    
           </div>
        </div>
    </div>
@endsection

<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <meta charset='utf-8'>-->
<!--        <meta http-equiv="X-UA-compatible" content="IE=edge">-->
<!--        <meta name="viewport" content="width=desvice-width,inital-scale=1">-->
        
<!--        <title>MyNews</title>-->
<!--    </head>-->
    
<!--    <body>-->
<!--        <h1> プロフィール編集画面 </h1>-->
<!--    </body>-->
    
<!--</html>-->
