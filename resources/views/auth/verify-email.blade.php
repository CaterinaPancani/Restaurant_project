<x-layout>
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
    @endif
    <form action="{{route('verification.send')}}" method="POST">@csrf
    <button type="submit">Invia la mail</button>
</form>
</x-layout>