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

    <div id="app">
       <ul>
         <h1>List</h1>
         <li v-for="element in list">
            <p>@{{element.model}}</p>
            <p>@{{element.weight}}</p>
            <p>@{{element.description}}</p>
            <p>@{{element.power}}</p>

         </li>
       </ul>
    </div>
  </main>
@endsection