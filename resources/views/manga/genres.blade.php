<x-layout>

    <div class="container-fluid text-center bg-info">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="display-1 mt-5 mb-5">
                    Tutti i generi manga
                </h1>
            </div>
        </div>
    </div>
    <div class="container my-5 text-center">
        <div class="row justify-content-center">
            @foreach ($genres as $genre)
                <div class="col-12 col-md-2">
                    <a href="{{route('manga.index' , ['genre_id' => $genre['mal_id'] , "genre_name" => $genre['name']])}}" class="btn btn-dark w-100 my-2">{{ $genre['name'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
