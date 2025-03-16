@extends("layouts.app")

@section("content")

<a href="{{ route('index') }}" style="margin-bottom: 10px;">Powrót do menu</a>

@if(session('error'))
<p style="color: red;">Komunikat: {{ session('message') }}</p>
@endif

<form method="POST" action="{{ route('pet.create') }}" style="margin: auto; padding-bottom: 15px;">
  @csrf
  <h2>Dodaj nowe zwierzę:</h2>
  <div style="margin-bottom: 20px;">
    <label for="name">Nazwa:</label>
    <input type="text" id="name" name="name" placeholder="np. chuck" required />
  </div>
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
  <button type="submit">Dodaj</button>
</form>

@endsection