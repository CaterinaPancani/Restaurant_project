<x-layout>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

<div class="container">
    <div class="row">
        <div class="col-4 ">
            ciao
        </div>
        <div class="col-4">
            <p>
                Utilizza le tue credenziali per accedere:
            </p>
            <form method="POST" action={{route('login')}}>
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control">
                </div>
                    @error('email')
                    <span>{{$message}}</span>
                    @enderror
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input name="password" type="password" class="form-control">
                </div>
                <a href="{{route('password.request')}}">Ho dimenticato la password</a>
                    @error('password')
                    <span>{{$message}}</span>
                    @enderror
                <div class="mb-3">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">Ricordami</label>
                </div>
                <button type="submit" class="btn btn-primary">Entra</button>
            </form>
        </div>
        <div class="col-4">
            ciao
        </div>
    </div>
</div>

</x-layout>