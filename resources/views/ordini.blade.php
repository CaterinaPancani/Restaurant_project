<x-layout>
    @foreach ($orders as $order)
        <h1>
            porcodio{{$order->usid}}
            </h1>
    @endforeach
</x-layout>