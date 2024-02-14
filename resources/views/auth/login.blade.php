<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-danger text-center">
                    Accedi Bastardo!
                </h1>
                {{-- form di registazione --}}
                <form action="{{route("login")}}" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label  class="form-label">Email address</label>
                      <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control"  name="password">
                      </div>


                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
                {{-- fine form di registrazione --}}
            </div>
        </div>
    </div>
</x-layout>