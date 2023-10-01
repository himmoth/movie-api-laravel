<nav class="mb-5">
    <div class="container nav-movie">
      <a href=""><img src="{{asset('assets/logo/logo.png')}}" class="logo" width="40px" alt=""></a>
        <ul class="nav-movie-left show"> 
            <li><a class="active" href="/"> Movies </a></li>
            <li><a href=""> Tv Shows </a></li>
            <li><a href="{{route('actor.index')}}"> Actors </a></li>

        </ul>
        <ul class="nav-movie-right">         
        {{-- <li class="search"> 
          <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
         </div>
      </li> --}}
        <li>
          <img src="{{asset('assets/movies/6.png')}}" alt="">
        </li>
        
        </ul>
       <div class="bar-menu">
        <i class="fa-solid fa-bars" id="fa-bars"></i>
       </div>
    </div>
</nav>