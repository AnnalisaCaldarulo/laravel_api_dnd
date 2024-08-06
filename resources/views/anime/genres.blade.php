<x-layout>

    <div class="container-fluid text-center bg-info">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="display-1 mt-5 mb-5">
                    Tutti i generi anime
                </h1>
            </div>
        </div>
    </div>
    <div class="container my-5 text-center">
        <div class="row justify-content-center" id="wrapper">
            {{-- @foreach ($genres as $genre)
                <div class="col-12 col-md-2">
                    <a href="{{ route('manga.index', ['genre_id' => $genre['mal_id'], 'genre_name' => $genre['name']]) }}"
                        class="btn btn-dark w-100 my-2">{{ $genre['name'] }}
                    </a>
                </div>
            @endforeach --}}
        </div>
    </div>

    <script>
        fetch('/api/anime/genres')
            .then(response => response.json())
            .then(data => {
                console.log(data)
                const wrapper = document.querySelector('#wrapper');
                data.forEach(el => {
                    const col = document.createElement('div');
                    col.classList.add('col-12', 'col-md-3', 'my-2');
                    const btn = document.createElement('a');
                    btn.href =`/anime/genres/${el.mal_id}/${el.name}`
                    btn.classList.add('btn', 'btn-dark', 'w-100');
                    btn.textContent = el.name;
                    col.appendChild(btn)
                    wrapper.appendChild(col);
                });
            })
            .catch(error => {
                console.log('si è verificato un errore:'.error);
            });
    </script>
</x-layout>
