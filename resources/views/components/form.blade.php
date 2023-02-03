<form action="{{ $action }}" method="{{ $method }}" class="grid gap-4">
  @csrf
  {{ $slot }}
</form>