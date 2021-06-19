@extends('layout.helloapp')

@section('title','Session')

    @section('menubar')
        @parent
        セッションページ
    @endsection

    @section('content')
    <p>{{ $session_data }}</p>
        <form action="/hello/session" method="post">
            @csrf
            <input type="text" name="input"><br>
            <input type="submit" value="send">
        </form>
    @endsection

@section('footer')
    copyright 2021.
@endsection
