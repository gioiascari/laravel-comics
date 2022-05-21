
@extends('layouts.app')


 @section('main')

 {{-- Card top focus --}}

<div class="singleCard">
    <div class="cards-container">
        <div class="card">
            <img src="{{$comics['thumb']}}" alt="">
        </div>
     </div>
</div>
 {{--/ Card top focus --}}
 {{-- Card text focus --}}
 <div class="c-main">


    <div class="description">

        <div class="text-desc">
            <div class="title-container p-10">
                <h1>{{$comics['title']}}</h1>
             </div>
             <div class="availability">
                 <div class="text-desc ">
                    <p><span>U.S Price : </span>{{$comics['price']}}</p>
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
                    {{$comics['description']}}
                </p>
             </div>
        </div>
        <img src="{{ asset('img/adv.jpg') }}" alt="">
     </div>
 </div>
</div>
 {{--/ Card text focus --}}
  {{--TALENT SECTION --}}
  <div class="c-main">
    <div class="availability">
        <div class="text-desc column">
          <h1>TALENT</h1>
          <div class="artBy">
              <h1>Art By: </h1>
            @foreach ($comics['artists'] as $artist)
             <span class="artist">{{ $artist }}</span>,
            @endforeach
          </div>







       </div>
       <div class="text-desc flex-end">
           <h1>SPECS</h1>
       </div>
    </div>
  </div>
  {{--/TALENT SECTION --}}









@endsection
