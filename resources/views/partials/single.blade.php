
@extends('layouts.app')


 @section('main')
 {{-- Card top focus --}}

<div class="singleCard">
    <div class="cards-container">
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
     </div>
</div>
 {{--/ Card top focus --}}
 {{-- Card text focus --}}



 <div class="c-main">


    <div class="description">

        <div class="text-desc">
            <div class="title-container p-10">
                <h1>{{$comic['title']}}</h1>
             </div>
             <div class="availability">
                 <div class="text-desc ">
                    <p><span>U.S Price : </span>{{$comic['price']}}</p>
                </div>
                <div class="text-desc flex-end">
                    <span>Available</span>
                    <p>
                        <a href="/">
                            Check Availability
                        </a>

                    </p>
                </div>


             </div>
             <div class="p-10">
                <p>
                    {{$comic['description']}}
                </p>
             </div>
        </div>
        <img src="{{$comic['thumb']}}" alt="">
     </div>
 </div>
</div>
  {{--/TALENT SECTION --}}

  {{--/ Card text focus --}}







@endsection
