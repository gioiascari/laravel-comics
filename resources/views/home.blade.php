
@extends('layouts.app')

@section('main')
    <main>
    <div class="main">


        <div class="container-main">

            <div class="series-span">

                <span class="btn"> CURRENT SERIES</span>

            </div>

             <div class="cards-container">

                @foreach($comics as $idCard=>$comic)

                <div class="cards-thumb">

                    <a href="/single/{{$idCard}}">

                        <img src="{{$comic['thumb']}}" alt="{{ $comic['series'] }}">

                        <p>{{$comic['series']}}</p>

                    </a>

                </div>

                @endforeach
            </div>
            <div class="btn-container">
                <span class="btn"> LOAD MORE</span>
            </div>

        </div>
    </div>
    </main>
@endsection
