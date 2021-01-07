@extends('layouts.main')

@section('content-main')
    <div class="bg-hero" style="background-image: url('{{ $comic['image-hero'] }}')">
        <div class="container hero p-relative">
            <img class="p-absolute" src="{{ $comic['image-cover'] }}" alt="">
        </div>
    </div>

    <section class="details pt-3 pb-3">
        <div class="container">
           <h1>{{ $comic['title'] }}</h1>
           <h3 class="pt-1 pb-1">U.S Price: ${{ $comic['price'] }}</h3>
           <p class="pt-1">
               {!! $comic['body'] !!}
           </p>
        </div>
    </section>
@endsection