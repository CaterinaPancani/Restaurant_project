<div class="container">
    @if (session()->has('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        @foreach ($foods as $food)
        <div class="card" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title">{{$food->name}}</h5>
              <p class="card-text">{{$food->desc}}</p>
              {{-- passare oggetto in rotta parametrica --}}
              <a wire:click="delete({{ $food }})" class="btn btn-danger">delete</a>
            </div>
        </div>
        @endforeach

    </div>
</div>