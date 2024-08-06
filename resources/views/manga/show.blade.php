<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <h1>{{ $manga['title'] }}</h1>
            <div class="col-12 col-md-6 my-2 d-flex flex-column align-items-center">
                <img src="{{ $manga['image'] }}" class="card-img-top" alt="...">

            </div>
            <div class="col-12 col-md-6">
                <h5 class="card-title"> titolo: {{ $manga['title'] }}</h5>
                <p class="card-text text-truncate">{{ $manga['synopsis'] }}</p>
                <p class="card-text text-muted">Author: {{ $manga['author'] }}</p>
            </div>
        </div>
    </div>
</x-layout>
