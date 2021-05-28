@extends('layouts.main')
@section('content')

<form method="POST" action="{{ route('update', $matches -> id) }}">
    @csrf
    @method('POST')
    <div class="form-group row">
        <label for="team1" class="col-md-4 col-form-label text-md-right">TEAM 1</label>
        <div class="col-md-6">
            <input id="team1" type="text" class="form-control" name="team1" value="{{ $matches -> team1}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="team2" class="col-md-4 col-form-label text-md-right">TEAM 2</label>
        <div class="col-md-6">
            <input id="team2" type="text" class="form-control" name="team2" value="{{ $matches -> team2}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="point1" class="col-md-4 col-form-label text-md-right">POINT1</label>
        <div class="col-md-6">
            <input id="point1" type="number" class="form-control" name="point1" value="{{ $matches -> point1}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="point2" class="col-md-4 col-form-label text-md-right">POINT2</label>
        <div class="col-md-6">
            <input id="point2" type="number" class="form-control" name="point2" value="{{ $matches -> point2}}">
        </div>
    </div>
   <div class="form-group row">
        <label for="result" class="col-md-4 col-form-label text-md-right">RESULT</label>
        <div class="col-md-6">
            <select name="result" id="result" class="form-control">
                <option value="0"
                    @if ($matches -> result == 0 )
                    selected                    
                    @endif               
                    > team 1
                </option>
                <option value="1"
                    @if ($matches -> result == 1 )
                    selected                    
                    @endif
                    > team 2
                </option>
            </select>
        </div>
    </div>
    <div class="form-group row ">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">
                UPDATE
            </button>
        </div>
    </div>
</form>
 
 @endsection