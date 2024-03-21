<x-layout>
  <div class="container">
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
        <form method="POST" action="{{route('password.update')}}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input name="email" type="email" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Inserisci la nuova password</label>
              <input name="password" type="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Conferma la password</label>
                <input name="password_confirmation" type="password" class="form-control">
            </div>
            <div class="mb-3">
              <input name="token" type="password" class="form-control" value="{{$request->route('token')}}" hidden>
            </div>
            <button type="submit" class="btn btn-primary">Reimposta</button>
        </form>
      </div>
      <div class="col-3">
      </div>
    </div>
  </div>
</x-layout>