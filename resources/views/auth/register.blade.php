<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-3 border">
                ciao
            </div>
            <div class="col-6">
                <p>
                    Registrazione utente:
                </p>
                <form method="POST" action={{route('register')}}>
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input name="name" type="text" class="form-control">
                    </div>
                        @error('name')
                        <span>{{$message}}</span>
                        @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                        @error('email')
                        <span>{{$message}}</span>
                        @enderror
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control">
                    </div>
                        @error('password')
                        <span>{{$message}}</span>
                        @enderror
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
            <div class="col-3 border">
                ciao
            </div>
    </div>
</div>

</x-layout>