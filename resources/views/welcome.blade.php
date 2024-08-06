<x-layout>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12 text-center">
                <h1 class="text-center">
                    Welcome
                </h1>
                <a href="{{ route('anime.genres') }}" class="btn btn-dark btn-lg">
                    Anime
                </a>
                <a href="{{ route('manga.genres') }}" class="btn btn-dark btn-lg">
                    Manga
                </a>
            </div>
            <div class="col-12 com-md-3">
                <a href="{{route('classes')}}" class="btn btn-dark btn-lg">classi</a>
            </div>
        </div>
    </div>
</x-layout>
