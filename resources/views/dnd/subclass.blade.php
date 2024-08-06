<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center ">
            <h1>Informazioni sulla classe <span class="fst-italic">{{ $subclass['name'] }}</span></h1>
            <div class="col-12 ">
                {{-- @dump($subclass) --}}
                <p>Descrizione: {{$subclass['desc'][0]}} </p>
            </div>
           
        </div>
    </div>
</x-layout>
