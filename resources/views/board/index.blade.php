@extends('layout.helloapp')

@section('title','Board.Index')

    @section('menubar')
        @parent
        ボード・ページ
    @endsection

    @section('content')
        <form action="/person/del" method="post">
        @csrf
        @foreach ($items as $item)
            {{ $item->getData() }}<br>
            <?php var_dump($item) ?>
        @endforeach
    @endsection

@section('footer')
    copyright 2021.
@endsection
