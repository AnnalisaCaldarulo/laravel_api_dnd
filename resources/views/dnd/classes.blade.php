<x-layout>
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($classes as $class)

            @dump($class)

                <div class="col-12 col-md-3 my-2 d-flex flex-column align-items-center">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $class['name'] }}</h5>
                            <p class="card-text text-truncate">{{ $class['index'] }}</p>
                            <div class="text-center">
                                <a href="{{route('classes.info', ['index'=>$class['index']])}}" class="btn btn-dark">Dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
