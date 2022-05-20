
@extends('layouts.app')


 @section('main')
 {{-- Card top focus --}}

<div class="singleCard">
    <div class="cards-container">
        <div class="card">
            <a href="/">Go Back</a>
            <img src="{{$comic['thumb']}}" alt="">
        </div>
     </div>
</div>
 {{--/ Card top focus --}}
 {{-- Card text focus --}}
 <div class="c-main justify-center">
    <div class="title-container">
        <h1>{{$comic['title']}}</h1>
     </div>
 </div>
 <div class="c-main">
     <div class="availability">
         <div class="text-desc">
            <p>U.S Price : {{$comic['price']}}</p>
        </div>
        <div class="text-desc">
            <p>Available</p>
        </div>

     </div>
 </div>
 <div class="c-main">
    <div class="description">
        <div class="text-desc">
            <p>
                {{$comic['description']}}
            </p>
        </div>
        <img src="{{$comic['thumb']}}" alt="">
     </div>
 </div>
  {{--/TALENT SECTION --}}
    </div>
  {{--/ Card text focus --}}







@endsection
