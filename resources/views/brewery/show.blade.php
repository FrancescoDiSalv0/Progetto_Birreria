<x-layout>
    <div class="container">
        <div class="row justif-content-evenly mt-5">
            <div class="col-12">
                <img src="{{Storage::url($brewery->img)}}" alt="">
            </div>
            <div class="col-8">
                <h1 class="text-danger display-1">{{$brewery->name}}</h1>
                <h1 class="card-title">Proprietario del locale: {{$brewery->user->name}}</h1>
                <h2 class="card-title">indirizzo: {{$brewery->address}}</h2>
                <h3 class="card-title">Cap: {{$brewery->cap}}</h3>
                <h3 class="card-title">numero di telefono: {{$brewery->phone}}</h3>
                <h5 class="mt-5">Descrizione</h5>
                <p>{{$brewery->description}}</p>
                <div class="my-5">
                <a href="" class="btn btn-warning my-1">Modifica</a>
                {{-- <form method="POST" action="{{route('videogame.destroy', compact('videogame'))}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger my-1">Elimina</button>
                </div>
                </form> --}}
            </div>
        </div>
    </div>
</x-layout>