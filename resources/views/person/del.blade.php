@extends('layout.helloapp')

@section('title','Person.Delete')

    @section('menubar')
        @parent
        削除ページ
    @endsection

    @section('content')
    <form action="/person/del" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    name: {{ $form->name }}<br>
    mail: {{ $form->mail }}<br>
    age: {{ $form->age }}<br>
    <input type="submit" value="send">
    </form>
    @endsection

@section('footer')
    copyright 2021.
@endsection
