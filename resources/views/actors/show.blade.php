@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="box-people">
            <div class="box-people-top-img">
                <img src="{{ asset('https://image.tmdb.org/t/p/w500/'.$actor['profile_path']) }}" alt="">
            </div>
            <div class="box-peopl-text">
                <h5 class="title">{{$actor['name']}}</h5>
                <small class="date px-2 text-secondary">{{ \Carbon\Carbon::parse($actor['birthday'])->format('M/d/y')}} ({{ \Carbon\Carbon::parse($actor['birthday'])->age }}) Years old , Place of birth : {{$actor['place_of_birth']}}</small>
                <h6 class="title mt-2">Boigraphy</h6>
                <p class="title">{{$actor['biography']}}</p>
                <h6 class="title">Known For</h6>
                <div class="box-person-known">                   
                    @foreach($actor['combined_credits']['cast'] as $cast) 
                   
                    @if($loop->index <8)       
                    @if($cast['media_type']=='movie')  
                    @if($cast['poster_path'])        
                    <div class="box-people-img mb-5">
                   
                         <a href="{{route('show',$cast['id'])}}">  <img src="{{
                         asset('https://image.tmdb.org/t/p/w500/'.$cast['poster_path']) }}" alt=""></a>
                        <h6 class="title mb-0" > </h6>
                        <p class="title">{{$cast['title']}}</p>
                    </div>
                    @else
                    <div class="box-people-img mb-5">
                   
                        <a href="{{route('show',$cast['id'])}}">  <img src="{{
                        asset('https://placehold.jp/250x350.png' )}}" alt=""></a>
                       <h6 class="title mb-0" > </h6>
                       <p class="title">{{$cast['title']}}</p>
                   </div>
                    @endif

                    @else
                    <div class="box-people-img mb-5">
                   
                        <a href="{{route('tv.show',$cast['id'])}}">  <img src="{{
                        asset('https://image.tmdb.org/t/p/w500/'.$cast['poster_path']) }}" alt=""></a>
                       <h6 class="title mb-0" > </h6>
                       <p class="title">{{$cast['title']}}</p>
                   </div>
                    @endif
                    @endif
                   


                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection