@extends('layout.helloapp')

@section('title','Person.index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <table>
            @foreach ($items as $item)
            {{ $item->getData() }}
            @if ($item->board != null)
                {{ $item->board->getData() }}<br>
            @endif
            @endforeach
        </table>
    @endsection

@section('footer')
    copyright 2021.
@endsection
