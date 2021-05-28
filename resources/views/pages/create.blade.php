@extends('layouts.main')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('store') }}">

                @csrf
                @method('POST')
                
                 <div class="form-group row">
                    <label for="team1" class="col-md-4 col-form-label text-md-right">TEAM1</label>
                    <div class="col-md-6">
                        <input id="team1" type="text" class="form-control" name="team1" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="team2" class="col-md-4 col-form-label text-md-right">TEAM2</label>
                    <div class="col-md-6">
                        <input id="team2" type="text" class="form-control" name="team2" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="point1" class="col-md-4 col-form-label text-md-right">POINT1</label>
                    <div class="col-md-6">
                        <input id="point1" type="number" class="form-control" name="point1" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="point2" class="col-md-4 col-form-label text-md-right">POINT2</label>
                    <div class="col-md-6">
                        <input id="point2" type="number" class="form-control" name="point2" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="result" class="col-md-4 col-form-label text-md-right">RESULT</label>
                    <div class="col-md-6">
                        <select name="result" id="result" class="form-control">
                            <option value="0">team 1</option>
                            <option value="1">team 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
 @endsection