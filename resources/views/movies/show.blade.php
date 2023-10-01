@extends('layouts.app')

@section('content')
    <section class="detail mb-5 ">
        <div class="show-detail ">
            <div class="show-detail-img">
                <img src="{{ asset('https://image.tmdb.org/t/p/w500/' . $movie['poster_path']) }}" alt="">
            </div>
            <div class="show-detail-article">
                <div class="show-title">
                    <h3 class="title">{{ $movie['title'] }}</h3>
                    <ul class="mb-3">
                        <li class="text-white li-star"><i class="fa-solid fa-star text-warning"></i>
                            {{ $movie['vote_average'] * 10 . '%' }}
                            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M/d/y') }}
                                @foreach ($movie['genres'] as $genre)
                                    <span class="body-text d-inline ">{{ $genre['name'] }}@if (!$loop->last)
                                            ,
                                        @endif
                                    </span>
                                @endforeach
                        </li>

                    </ul>
                </div>
                <div class="show-text">
                    <h5 class="title">Overview</h5>
                    <p class="body-text">{{ $movie['overview'] }} </p>
                    <h6 class="title feature-crew">Feature Crew</h6>
                    @foreach ($movie['credits']['crew'] as $crew)
                        @if ($loop->index < 4)
                            <ul class="d-flex ">
                                <li class="title">{{ $crew['name'] }} :</li>
                                <li class="mx-4 title text-warning">{{ $crew['job'] }}</li>
                            </ul>
                        @endif
                    @endforeach

                    <div class="show-btn mt-3">
                        <a class="title" href="https://www.youtube.com/watch?v={{$movie['videos']['results'][1]['key']}}"><i class="fa-solid fa-circle-play text-white"></i> Play Trailer</a> 
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="show-border-bottom mb-5"></div>
    <div class="wrapper">
        <section class="popular-movie">
            <h4 class="top-title mb-3">Cast</h4>
            <div class="box-popular-view mb-4">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 12)
                        @if ($cast['profile_path'])
                            <div class="card-popular-moview">
                                <div class="card-header-popular-img mb-2">

                                    <a href=""> <img
                                            src="{{ asset('https://image.tmdb.org/t/p/w500/' . $cast['profile_path']) }}"
                                            alt=""></a>

                                </div>
                                <div class="car-body">
                                    <h6 class="mb-0 text-primary">{{ $cast['name'] }}</h6>
                                    <p class="body-text">{{ $cast['character'] }} </p>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </section>
    </div>
    <div class="show-border-bottom mb-5"></div>
    <h4 class="top-title mb-3">Images</h4>

    <div class="images mb-5">

        @foreach ($movie['images']['backdrops'] as $image)
            @if ($loop->index < 8)
                <div class="show-box-img">
                    <img src="{{ asset('https://image.tmdb.org/t/p/w500/' . $image['file_path']) }}" alt="">
                </div>
            @endif
        @endforeach
    </div>


    <div class="show-border-bottom mb-5"></div>
    <div class="wrapper">
        <section class="popular-movie">
            <h4 class="top-title mb-3">Recommendations</h4>
                <div class="box-popular-view mb-4">
                    @foreach ($movieRecommendations as $recommendation)
                        @if ($loop->index < 6)
                            @if ($recommendation['poster_path'])
                                <div class="card-popular-moview">
                                    <div class="card-header-popular-img mb-2">

                                        <a href="{{ route('show', $recommendation['id']) }}"> <img
                                                src="{{ asset('https://image.tmdb.org/t/p/w500/' . $recommendation['poster_path']) }}"
                                                alt=""></a>

                                    </div>
                                    <div class="car-body">
                                        <a href="{{ route('show', $recommendation['id']) }}">
                                            <h6 class="mb-0 text-primary">{{ $recommendation['title'] }}</h6>
                                        </a>
                                        <p class="body-text">
                                            {{ \Carbon\Carbon::parse($recommendation['release_date'])->format('M/d/y') }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
        </section>
    </div>

@endsection
