<header>
    <a href="{{route('homepage')}}">casa</a>

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
          </li>
         @endforeach
       </ul>
    </div>
</header>