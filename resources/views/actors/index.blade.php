@extends('layouts.app')

@section('content')

<div class="wrapper">
    <section class="popular-movie people">
     <h4 class="top-title mb-3">Popular People</h4>
     <div class="box-popular-view mb-5">
         @foreach ($popularPerson as $person)        
             @if($loop->index < 12)
                 <div class="card-popular-moview mb-3">
                     <div class="card-header-popular-img mb-2">
                         <a href="{{route('actor.show',$person['id'])}}"><img src="{{ asset('https://image.tmdb.org/t/p/w500/'.$person['profile_path']) }}" alt=""></a>
                     </div>
                     <div class="car-body">
                         <a href=""><h6 class="title mb-0">{{$person['name']}}</h6></a>  
                        
                        <small class="title description-people">{{$person['known_for_department']}} </small>                            
                             
                        
                     </div>
                 </div>
             @endif
         @endforeach
     </div>
    </section>
 <div class="show-border-bottom mb-5"></div>


 </div>

    
@endsection