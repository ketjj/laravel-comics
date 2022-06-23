@php
$lista = ['characters', 'comics', 'movies', 'tv','games','collectibles',
          'videos','fans','news','shop'
         ]
@endphp

<header>
  <div class="k_container">
    <div>
      <a href="{{ route('comics') }}">
        <img src="{{ asset('img/dc-logo.png')}}" alt="Logo DC">
      </a>
    </div>

    
    <div class="nav">
      <div class="nav_bar">
        <nav >
          <ul class="nav_list">
            {{-- //CICLO IL VARIABILE $lista CREATO SOPRA--}}
            @foreach ($lista as $el)
              <li><a class="{{ Route::currentRouteName() === $el ? 'active' : ''}}" href="{{ route($el) }}">{{ $el }}</a></li>
            @endforeach             

          </ul>
        </nav>
      </div>

    </div>

  </div>
     
</header>
<div class="jumbotron">
  <button class="btn btn-primary k_btn">Current Series</button>
</div>