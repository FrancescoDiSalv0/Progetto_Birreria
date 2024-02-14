<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="diplay-1">Lista delle tue birre</h1>
                <div class="row justify-content-center">
                    @foreach ($breweries as $brewery)
                    <div class="col-md-4">
                        <div class="card my-4">
                        <img src="{{Storage::url($brewery->img)}}" class="card-img-top" style="height: 350px;" alt="immagine-casuale">
                        <div class="card-body">
                          <h5 class="card-title">Titolo: {{$brewery->name}}</h5>

                          @if ($brewery->user_id === null)
                          <h5 class="card-title">Autore: Pippofranco</h5>  
                        @else  
                          <h5 class="card-title">Autore: {{$brewery->user->name}}</h5>
                        @endif  

                          <h5 class="card-title">Indirizzo: {{$brewery->address}}</h5>
                          <p class="card-title">Descrizione: {{$brewery->description}}</p>
                          <a href="{{route("brewery.show", compact("brewery"))}}" class="btn btn-primary">Vai a dettaglio</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                
                
            </div>
        </div>
    </div>
</x-layout>