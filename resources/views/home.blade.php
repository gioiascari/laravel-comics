
@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            
        <span class="btn"> CURRENT SERIES</span>
            <div class="cards-container">
                @foreach($comics as $comic)
                <div class="cards-thumb">
                    
                    <img src="{{$comic['thumb']}}" alt="thumb">
                    <p>{{$comic['series']}}</p>
                </div>
                @endforeach
            </div>
            <div class="btn-container">
                <span class="btn"> LOAD MORE</span>
            </div>

        </div>



      
             
    </main>
@endsection