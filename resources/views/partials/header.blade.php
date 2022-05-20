
<header>
<div class="menu">
<div class="container">
            <div class="logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="tag">
              </div>
                <!-- /.logo -->

                @foreach($navigation as $nav)
                <ul>
                    <li><a href="/">{{$nav['text']}}</a></li>
                </ul>
              @endforeach

        </div>

          <!-- /.container -->
</div>

        <div class="jumbotron">
                <img src="{{ asset('img/jumbotron.jpg') }}" alt="tag">
        </div>
      <!-- /.menu -->

</header>
