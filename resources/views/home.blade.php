@extends('layouts.main')

@section('content')
  <main>
  <div>
       <ul>
         @foreach($cars as $item)
          <li>
             Marca:
             {{$item->marca}}
          </li>
          <li>
           Modello:
          {{$item->modello}}
          </li>
          <li>
           Targa:
          {{$item->targa}}
          <hr>
          </li>
         @endforeach
       </ul>
    </div>
  </main>
@endsection