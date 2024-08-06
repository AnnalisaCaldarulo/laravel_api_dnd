<x-layout>
    <div class="container">
        <div class="row justify-content-center" id="wrapper">
            <h1>{{ $genre_name }}</h1>
        </div>
    </div>
    <script>
        let genre_id = {{ $genre_id }}
        let genre_name = `{{ $genre_name }}`
        fetch(`/api/anime/genres/${genre_id}/${genre_name}`)
            .then(response => console.log(response))

            .then(data => {
                console.log(data);
            })
            .catch(error => console.log(error))
    </script>
</x-layout>
