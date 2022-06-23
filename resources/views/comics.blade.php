@extends('layouts.main')

@section('content')

  <div class="k_container">
    {{-- <button>1</button> --}}
    @foreach ($comix as $com)    
    <div class="k_card">
        <div class="image">
          <img src="{{($com->image)}}" alt="card.series">
        </div>
        <div class="title">{{$com->title}}</div>
      </div>
      @endforeach
    </div>
    <button class="btn btn-primary k_btn2">LOAD MORE</button>
    
@endsection

  
