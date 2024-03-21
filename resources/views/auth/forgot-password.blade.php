<x-layout>
  @if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
        <form method="POST" action="{{route('password.email')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-3">
      </div>
    </div>
  </div>
</x-layout>