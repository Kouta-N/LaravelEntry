@extends('layout.helloapp')

@section('title','Person.find')

    @section('menubar')
        @parent
        検索ページ
    @endsection

    @section('content')
    <form action="/person/find" method="post">
    @csrf
    <input type="text" name="input" value="{{ $input }}">
    <input type="submit" value="find">
    </form>
    @if (isset($item))
        {{ $item->getData() }}<br>
    @endif
    @endsection

@section('footer')
    copyright 2021.
@endsection
