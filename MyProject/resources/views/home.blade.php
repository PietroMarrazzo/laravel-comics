@extends('layouts.main')

@section('content-main')
    <div class="bg-hero">
        <div class="container hero p-relative">
            <img class="p-absolute" src="{{ asset('images/cover-home.jpg') }}" alt="">
        </div>
    </div>

    <section class="comics-area pt-3 pb-3">
        <div class="container">
            <ul class="comics-list d-flex wrap ul-nostyle">
                @foreach ($comics as $comic)
                   <li class="comic mt-3 mr-3">
                       <a href="">
                           <img src="{{ $comic['image'] }}" alt="">
                           <h3 class="pt-1 txt-center">
                               {{ $comic['title'] }}
                           </h3>
                       </a>
                   </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection