@extends('layouts.template')

@section('title', 'Home')

@section('body')
<div>
    <a href="/">
        <h3>IT REALLY COUNTS</h3>
    </a>
    @foreach ($books as $book)
        @if ($book->Detail->likes == 10)
            <div class="columns is-mobile is-centered is-vcentered">
                <div class="column">
                <img src="/assets/book-cover.jpg" alt="">
                </div>
                <div class="column">
                <span class="title">{{ $books->title }}</span><br>
                <span class="subtitle">{{ $books->description }}</span>
                </div>
            </div>
        @endif
    @endforeach
</div>
<br><br>
<div>
    <a href="/">
        <h3>LATEST BOOK REVIEW</h3>
    </a>
    <div class="container mx-auto grid grid-cols-3">
        @foreach ($books as $book)
            <a href="/detail/{{ $book->id }}">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="image w-full" src="/assets/book-cover.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
                        <p class="text-gray-700 text-base">
                        {{ $book->description }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach

            @if (count($books) == 0)
                <div class="text-2xl">
                    <h1>No Data</h1>
                </div>
            @endif
    </div>
</div>
<br><br>
<div>
    <a href="/">
        <h3>BOOK SERIES REVIEW</h3>
    </a>
    <div class="container mx-auto grid grid-cols-3">
        @foreach ($books as $book)
            <a href="/detail/{{ $book->id }}">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="image w-full" src="/assets/book-cover.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
                    </div>
                </div>
                <button>Read Post</button>
            </a>
        @endforeach

            @if (count($books) == 0)
                <div class="text-2xl">
                    <h1>No Data</h1>
                </div>
            @endif
    </div>
</div>
@endsection

