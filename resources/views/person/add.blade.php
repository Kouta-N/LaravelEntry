@extends('layout.helloapp')

@section('title','Person.Add')

    @section('menubar')
        @parent
        新規作成ページ
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
    <form action="/person/add" method="post">
    @csrf
    name: <input type="text" name="name" value="{{ old('name') }}"><br>
    mail: <input type="text" name="mail" value="{{ old('mail') }}"><br>
    age: <input type="number" name="age" value="{{ old('age') }}"><br>
    <input type="submit" value="send">
    </form>
    @endsection

@section('footer')
    copyright 2021.
@endsection
