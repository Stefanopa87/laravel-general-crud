@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h1 class="bg-info"> PARTITA: </h1>

            @if ($matches -> result)
                {{ $matches -> team1 }}
                <u>{{ $matches -> team2 }}</u>             
            @else
                <u>{{ $matches -> team1 }}</u>
                {{ $matches -> team2 }}                
            @endif
                        
            {{ $matches -> point1 }}                       
            {{ $matches -> point2 }}          
            <br>
            {{ $matches -> result }}   
            <hr>                 
        </div>
    </div>
</div>
 
@endsection