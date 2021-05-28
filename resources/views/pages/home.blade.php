@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h1 class="bg-info"> PARTITE: </h1>

            <ul style="list-style: none">

                @foreach ($matches as $match)
                <li>
                    <a href="{{route('match', $match -> id )}}">
                        [{{ $match -> id }}]
                        {{ $match -> team1 }}
                        {{ $match -> team2 }}                       
                        {{ $match -> point1 }}                       
                        {{ $match -> point2 }}  
                        <br>
                        {{ $match -> result }}   
                        <a class="mx-2" href="{{ route('edit', $match -> id) }}"> &#9998; </a>
                        <a class="mx-2" href="{{ route('destroy', $match -> id) }}"> &#120; </a>
                        <hr>                     
                        
                    </a>
                </li>                    
                @endforeach

            </ul>

            
        </div>
    </div>
</div>
 
@endsection