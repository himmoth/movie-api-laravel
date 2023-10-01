@extends('layouts.app')

@section('content')
    <div class="wrapper">
       <section class="popular-movie">
        <h4 class="top-title mb-3">Popular Movies</h4>
        <div class="box-popular-view mb-5">
            @foreach ($popularMovie as $popular)        
                @if($loop->index < 12)
                    <div class="card-popular-moview mb-3">
                        <div class="card-header-popular-img mb-2">
                            <a href="{{route('show',$popular['id'])}}"><img src="{{ asset('https://image.tmdb.org/t/p/w500/'.$popular['poster_path']) }}" alt=""></a>
                        </div>
                        <div class="car-body">
                            <a href=""><h5 class="title">{{$popular['title']}}</h5></a>
                            <ul class="rate-date">
                                <li class="text-white li-star"><i class="fa-solid fa-star"></i> {{$popular['vote_average']* 10 .'%'}}</li>
                                <li><small class="date px-2">{{ \Carbon\Carbon::parse($popular['release_date'])->format('M/d/y')}}</small></li>
                            </ul>
                            @foreach ($popular['genre_ids'] as $genre)
                            <span class="body-text d-inline ">{{$genres->get($genre)}}@if(!$loop->last),@endif</span></span>
                            @endforeach
                          
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
       </section>
    <div class="show-border-bottom mb-5"></div>


    </div>

    <div class="wrapper">
        <section class="popular-movie">
         <h4 class="top-title mb-3">Upcoming Movies</h4>
         <div class="box-popular-view mb-4">
             @foreach ($upcomingMovie as $upcoming)        
                 @if($loop->index < 12)
                     <div class="card-popular-moview mb-3">
                         <div class="card-header-popular-img mb-2">
                             <a href="{{route('show',$upcoming['id'])}}"><img src="{{ asset('https://image.tmdb.org/t/p/w500/'.$upcoming['poster_path']) }}" alt=""></a>
                         </div>
                         <div class="car-body">
                             <a href=""><h5 class="title">{{$upcoming['title']}}</h5></a>
                             <ul class="rate-date">
                                 <li class="text-white li-star"><i class="fa-solid fa-star"></i> {{$upcoming['vote_average']*10 .'%'}}</li>
                                 <li><small class="date px-2">{{ \Carbon\Carbon::parse($upcoming['release_date'])->format('M/d/y')}}</small></li>
                             </ul>
                             @foreach ($upcoming['genre_ids'] as $genre)
                             <span class="body-text d-inline ">{{$genres->get($genre)}}</span>
                             @endforeach
                         </div>
                     </div>
                 @endif
             @endforeach
         </div>
        </section>
        
     </div>
@endsection
