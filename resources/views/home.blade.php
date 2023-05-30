@extends('layout.master')
@section('title', 'Home Page')
@section('content')

{{-- HIGHLIGH BOOK SECTION --}}
<div label="highlight_book_section" class="mb-[3vw] border border-orange-950 border-[0.5vw] mx-[3vw] py-[1vw]">
    <h1 class="text-[1vw] font-semibold uppercase ml-[10vw] mb-[1vw]">
        Highlight Book Section
    </h1>
    <div class="container mx-auto ">
        @for ($i = 0; $i < 1; $i++)
            <?php $book = $books[$i]; ?>
            <a href="/detail/{{$book->id}}">
                <div class="w-full mx-[1vw] flex flex-row">
                    <img class="w-[30vw]" src="{{$book->Detail->image}}" alt="Sunset in the mountains">
                    <div class="px-[2vw] py-[2vw]">
                        <div class="font-bold mb-2 text-[3vw]">{{$book->title}}</div>
                        <p class="text-gray-700 text-base text-[1vw]">
                            {{$book->Detail->description}}
                        </p>
                    </div>
                </div>
            </a>
        @endfor
    </div>
</div>

{{-- LATEST BOOK REVIEWS SECTION --}}
<div label="latest_book_reviews_section" class="mb-[3vw] border border-orange-950 border-[0.5vw] mx-[3vw] py-[1vw]">
    <h1 class="text-[1vw] font-semibold uppercase ml-[10vw] mb-[1vw]">
        latest book reviews
    </h1>
    <div class="container mx-auto grid grid-cols-4">
        @for ($i = 0; $i < 4; $i++)
            <?php $book = $books[$i]; ?>
            <a href="/detail/{{$book->id}}">
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-[1vw]">
                    <img class="w-full" src="{{$book->Detail->image}}" alt="Sunset in the mountains">
                    <div class="px-[2vw] py-[2vw]">
                        <div class="font-bold text-xl mb-2">{{$book->title}}</div>
                        <p class="text-gray-700 text-base">
                            {{$book->Detail->description}}
                        </p>
                    </div>
                </div>
            </a>
        @endfor
    </div>
</div>

{{-- BOOKS SERIES REVIEW --}}
<div label="book_series_review" class="border border-orange-950 border-[0.5vw] mx-[3vw] py-[1vw] bg-orange-950">
    <h1 class="text-[1vw] text-white font-semibold ml-[10vw] mb-[1vw]">
        Book Series Review
    </h1>
    <div class="container mx-auto grid grid-cols-3">
        @foreach ($books as $book)
        <a href="/detail/{{$book->id}}">
            <div class="max-w-sm rounded bg-white shadow-lg">
                <img class="w-full" src="{{$book->Detail->image}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$book->title}}</div>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Read Post</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
