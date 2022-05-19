
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
 <div class="">
     <div class="title-container">
        <h1>{{$comic['title']}}</h1>
     </div>
     <div class="availability">
         <p>U.S Price : {{$comic['price']}}</p>
         <p>Available</p>
     </div>
     <div class="description">
        <img src="{{$comic['thumb']}}" alt="">

         <p>
             {{$comic['description']}}
         </p>
     </div>

 </div>
 {{--/ Card text focus --}}




@endsection
