@extends('layouts.template')

@section('title', 'Detail')

@section('body')
<a href="/">
    <h3>IT REALLY COUNTS</h3>
</a>
<br>
<div>
    <h1 class="text-4xl">
        {{ $book->title }}
    </h1>
    <br>
    <p>
        {{ $book->description }}
    </p>

    <ul class="m-0">
        <li class="flex my-5 gap-5">
            <p>
                By : {{ $book->Detail->author }} | {{ $book->Detail->datepost }}
            </p>
        </li>
        <li>
            {{ $book->Readtime->categories }}
        </li>
    </ul>

    <img src="/assets/book-cover.jpg" alt="">

    <p>
        {{ $book->Detail->description }}
        <br>
        {{ $book->Detail->description }}
    </p>
</div>
@endsection
