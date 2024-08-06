<x-layout>
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($mangas as $manga)
                <div class="col-12 col-md-3 my-2 d-flex flex-column align-items-center">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ $manga['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $manga['title'] }}</h5>
                            <p class="card-text text-truncate">{{ $manga['synopsis'] }}</p>
                            <p class="card-text text-muted">{{ $manga['author'] }}</p>
                            <div class="text-center">
                                <a href="{{route('manga.show', ['manga_id'=> $manga['id']])}}" class="btn btn-dark">Dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
