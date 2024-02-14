<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-danger text-center">
                    Registrati Bastardo!
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
                {{-- form di registazione --}}
                <form method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Username</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Email address</label>
                      <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control"  name="password">
                      </div>
                    <div class="mb-3">
                      <label  class="form-label">Conferma Password</label>
                      <input type="password" class="form-control" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
                {{-- fine form di registrazione --}}
            </div>
        </div>
    </div>
</x-layout>