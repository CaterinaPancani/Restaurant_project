<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($foods as $food)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$food->name}}</h5>
                  <p class="card-text">{{$food->desc}}</p>
                  <a href="{{route('ordini',$food)}}" class="card-link">Ordini</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>