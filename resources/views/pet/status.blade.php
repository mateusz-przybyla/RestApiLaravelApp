@extends("layouts.app")

@section("content")

<a href="{{ route('index') }}" style="margin-bottom: 10px;">Powrót do menu</a>

<form method="POST" action="{{ route('pet.searchByStatus') }}" style="margin: auto; padding-bottom: 15px;">
  @csrf
  <h2>Wyszukaj zwięrzęta po statusie:</h2>
  <div style="display: flex; justify-content: center; margin-bottom: 20px;">
    Status:
    <div>
      <input type="radio" id="available" name="status" value="available" checked required />
      <label for="available">available</label>
    </div>
    <div>
      <input type="radio" id="pending" name="status" value="pending" />
      <label for="pending">pending</label>
    </div>
    <div>
      <input type="radio" id="sold" name="status" value="sold" />
      <label for="sold">sold</label>
    </div>
  </div>
  <button type="submit">Szukaj</button>
</form>

@if(session('error'))
<h3>Wyniki:</h3>
<p style="color: red;">{{ session('error') }}</p>
@endif

@isset($results)
<h3>Wyniki:</h3>
@foreach ($results as $result)
<p>id: {{ $result['id'] }}, name: @isset($result['name']) {{ $result['name'] }} @endisset, status: @isset($result['status']) {{ $result['status'] }} @endisset</p>
@endforeach
@endisset

@endsection