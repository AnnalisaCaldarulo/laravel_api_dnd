<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center ">
            <h1>Informazioni sulla classe <span class="fst-italic">{{ $class['name'] }}</span></h1>
            <div class="col-12 ">
                <h5 class="card-title"> Nome: {{ $class['name'] }} </h5>
                <p class="card-text text-truncate">Equipaggiamento di partenza:</p>
                <ul>
                    @foreach ($class['equipment'] as $eq)
                        <li> {{ $eq['equipment']['index'] }}</li>
                    @endforeach
                </ul>
                <p class="card-text text-muted h3">Competenze: </p>
                <ul>
                    @foreach ($class['proficiencies'] as $arm)
                        <li>
                            {{ $arm['index'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12">
              <h3>Abilità </h3>  
                @foreach ($class['choices'] as $choice)
                    <p>Descrizione: {{ $choice['desc'] }}</p>
                @endforeach
            </div>
            <div class="col-12">
                <h3>Sottoclassi </h3>  
                @foreach($class['subclass'] as $sub)
                <a href="{{route('subclass', ['class'=>$sub['index']])}}">{{$sub['name']}}</a>
                @endforeach
              </div>
        </div>
    </div>
</x-layout>
