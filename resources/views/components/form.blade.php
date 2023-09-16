<form action="{{ $action }}" method="post" {{ $formattr }}>
    @csrf
    {{ $slot }}
</form>
