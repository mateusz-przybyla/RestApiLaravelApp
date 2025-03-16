@extends("layouts.app")

@section("content")

<div style="display: flex; flex-direction: column;">
  <h2>Menu</h2>
  <a href="{{ route('pet.createView') }}" style="margin-bottom: 10px;">Dodaj nowe zwierzę</a>
  <a href="{{ route('pet.idView') }}" style="margin-bottom: 10px;">Wyszukaj zwierzę po id</a>
  <a href="{{ route('pet.statusView') }}" style="margin-bottom: 10px;">Wyświetl zwięrzęta po statusie</a>
</div>

@endsection