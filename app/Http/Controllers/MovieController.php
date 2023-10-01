<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTliMzY0MGNlN2MwZWZlMGFjNzRkZThjZTZhYzk1NCIsInN1YiI6IjYzM2E4NGNmNDJkODM3MDA4MmVkMDdkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.nofr_YVtKkk_aaGymX-pKhzyscw1QcrDnBptVe6yYtE')
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];
        $upcomingMovie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTliMzY0MGNlN2MwZWZlMGFjNzRkZThjZTZhYzk1NCIsInN1YiI6IjYzM2E4NGNmNDJkODM3MDA4MmVkMDdkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.nofr_YVtKkk_aaGymX-pKhzyscw1QcrDnBptVe6yYtE')
        ->get('https://api.themoviedb.org/3/movie/upcoming')
        ->json()['results'];
        $genresArray = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTliMzY0MGNlN2MwZWZlMGFjNzRkZThjZTZhYzk1NCIsInN1YiI6IjYzM2E4NGNmNDJkODM3MDA4MmVkMDdkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.nofr_YVtKkk_aaGymX-pKhzyscw1QcrDnBptVe6yYtE')
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];

        $genres = \collect($genresArray)->mapWithKeys(function ($genre){

            return [$genre['id']=>$genre['name']];
        });
        
        // dump($genres);

        return \view('movies.index',
        
        ['popularMovie'=> $popularMovie,
        'upcomingMovie'=> $upcomingMovie,
        'genres' => $genres,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie =  Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTliMzY0MGNlN2MwZWZlMGFjNzRkZThjZTZhYzk1NCIsInN1YiI6IjYzM2E4NGNmNDJkODM3MDA4MmVkMDdkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.nofr_YVtKkk_aaGymX-pKhzyscw1QcrDnBptVe6yYtE')
        ->get('https://api.themoviedb.org/3/movie/'.$id .'?append_to_response=credits,images,videos')
        ->json();

        $movieRecommendations =  Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkYTliMzY0MGNlN2MwZWZlMGFjNzRkZThjZTZhYzk1NCIsInN1YiI6IjYzM2E4NGNmNDJkODM3MDA4MmVkMDdkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.nofr_YVtKkk_aaGymX-pKhzyscw1QcrDnBptVe6yYtE')
        ->get('https://api.themoviedb.org/3/movie/'.$id .'/recommendations')
        ->json()['results'];
     
        // dump($movie);

        return \view('movies.show',
    [
        'movie' => $movie,
        'movieRecommendations' => $movieRecommendations
        
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
