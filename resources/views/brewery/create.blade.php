<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="text-center text-danger">
                    Inserisci i dati del tuo Pub
                </h1> 

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

              {{-- inizio form --}}
                <form method="POST" action="{{route("brewery.store")}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" value="">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Indirizzo del locale</label>
                    <input type="text" class="form-control" name="address" value="">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">CAP</label>
                      <input type="number" class="form-control" name="cap" value="">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Numero di telefono</label>
                      <input type="number" class="form-control" name="phone" value="">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Catalogo Birre</label>
                      <select class="form-select mb-3" multiple aria-label="Multiple size 3 select example" name="beers[]">
                      @foreach ($beers as $beer)  
                        <option value="{{$beer->id}}">{{$beer->type}}</option>
                      @endforeach
                      </select>
                    </div>
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="Scrivi la tua descrizione qui" name="description" value=""></textarea>
                  <label for="floatingTextarea2">Descrizione del locale</label>
                </div>
                <div class="input-group">
                  <input type="file" class="form-control my-4 mb-4" id="inputGroupFile06" aria-describedby="inputGroupFileAddon06" aria-label="Upload" name="img">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning my-2">Crea</button>
                </div>
                </form>             
            </div>
        </div>
    </div>
</x-layout>