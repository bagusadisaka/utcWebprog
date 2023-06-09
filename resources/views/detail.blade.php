@extends('layout.master')
@section('title','Detail Book Review')
@section('content')
    <div class="container mx-auto">
        <h1 class="font-bold text-[3vw]">
            {{$book->title}}
        </h1>
        <h2 class="text-[1vw]">
            {{$book->Detail->description}}
        </h2>
        <div class="container flex flex-row mb-[1vw]">
            <h2 class="font-bold text-[1vw]">
                by {{$book->Detail->author}}
            </h2>
            <h2 class="text-[1vw]">
                | {{$book->Detail->date}}
            </h2>
            <div class="px-6 pb-2">
                <span class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$book->Category->category}}</span>
            </div>
        </div>
        <div class="w-[40vw] mb-[1vw]">
            <img class="w-full" src="{{$book->Detail->image}}" alt="">
        </div>

        <div class="sharing-buttons flex flex-wrap">
            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=instagram.com%2Fbagusadisaka" aria-label="Share on Facebook" draggable="false">
              <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                <title>Facebook</title>
                <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                </path>
              </svg>
            </a>
            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=instagram.com%2Fbagusadisaka&amp;text=" aria-label="Share on Twitter" draggable="false">
              <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                <title>Twitter</title>
                <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                </path>
              </svg>
            </a>
            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=instagram.com%2Fbagusadisaka&amp;title=&amp;summary=&amp;source=instagram.com%2Fbagusadisaka" aria-label="Share on Linkedin" draggable="false">
              <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                <title>Linkedin</title>
                <path d="M136 183v283H42V183h94zm6-88c1 27-20 49-53 49-32 0-52-22-52-49 0-28 21-49 53-49s52 21 52 49zm333 208v163h-94V314c0-38-13-64-47-64-26 0-42 18-49 35-2 6-3 14-3 23v158h-94V183h94v41c12-20 34-48 85-48 62 0 108 41 108 127z">
                </path>
              </svg>
            </a>
            <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-blue-600 bg-blue-600 hover:bg-blue-700 hover:border-blue-700" target="_blank" rel="noopener" href="https://wa.me/?text=%20instagram.com%2Fbagusadisaka" aria-label="Share on Whatsapp" draggable="false">
              <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                <title>Whatsapp</title>
                <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                </path>
              </svg>
            </a>
          </div>

        <p class="text-[1vw] mb-[1vw] w-[40vw]">
            {{$book->Detail->body}}
        </p>
        <h2 class="font-semibold mb-[1vw] text-[1vw]">
            Video Section
        </h2>
        <div class="w-[40vw]">
            <img class="w-full" src="{{$book->Detail->video}}" alt="">
        </div>
    </div>
@endsection
