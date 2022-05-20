
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
   {{--TALENT SECTION --}}
 <div class="talent-section">
     <div class="title-talent">
   {{--TALENT SECTION --}}
       <h1>TALENT</h1>
         <div class="art-by">
             <div class="text">
                 <h4>
                     Art By:
                 </h4>
                 <p>{{$comic['artists'][0]}}</p>
             </div>
         </div>

     </div>

 </div>
   {{--/TALENT SECTION --}}






@endsection
