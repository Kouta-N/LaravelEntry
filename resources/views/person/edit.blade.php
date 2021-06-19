@extends('layout.helloapp')

@section('title','Person.Add')

    @section('menubar')
        @parent
        編集ページ
    @endsection

    @section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/person/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    name: <input type="text" name="name" value="{{ $form->name }}"><br>
    mail: <input type="text" name="mail" value="{{ $form->mail }}"><br>
    age: <input type="number" name="age" value="{{ $form->age }}"><br>
    <input type="submit" value="send">
    </form>
    @endsection

@section('footer')
    copyright 2021.
@endsection
