@extends("layouts.app")

@section("content")

<a href="{{ route('index') }}" style="margin-bottom: 10px;">Powrót do menu</a>

@if(session('message'))
<p style="color: green;">Komunikat: {{ session('message') }}</p>
@endif

<form method="POST" action="{{ route('pet.searchById') }}" style="margin: auto; padding-bottom: 15px;">
  @csrf
  <h2>Wyszukaj zwięrzę po id, a następnie edytuj dane lub usuń zwierzę</h2>
  <input type="number" name="id" placeholder="wprowadź id np. 1" required />
  <button type="submit">Szukaj</button>
</form>

@if(session('error'))
<h3>Wynik:</h3>
<p style="color: red;">{{ session('error') }}</p>
@endif

@isset($result)
<h3>Wynik:</h3>
<p>id: {{ $result['id'] }}, name: {{ $result['name'] }}, status: @isset($result['status']) {{ $result['status'] }} @endisset</p>
<div style="display: flex; justify-content: center; gap: 10px">
  <form method="POST" action="{{ route('pet.delete', $result['id']) }}">
    @csrf
    @method('DELETE')

    <button type="submit" id="deleteBtn" style="margin-bottom: 20px;">Usuń</button>
  </form>

  <button type="button" id="showEditFormBtn" style="margin-bottom: 20px;">Edytuj</button>
</div>

<form method="POST" action="{{ route('pet.edit', $result['id']) }}" id="editForm" style="margin: auto; padding-bottom: 10px;" hidden>
  @csrf
  @method('PUT')

  <div style="margin-bottom: 20px;">
    <label for="name">Nazwa:</label>
    <input type="text" id="name" name="name" value="{{ $result['name'] }}" placeholder="np. chuck" required />
  </div>
  <div style="display: flex; justify-content: center; margin-bottom: 20px;">
    Status:
    <div>
      <input type="radio" id="available" name="status" value="available" required @isset($result['status']) {{ $result['status'] === "available" ? "checked" : "" }} @endisset />
      <label for="available">available</label>
    </div>
    <div>
      <input type="radio" id="pending" name="status" value="pending" @isset($result['status']) {{ $result['status'] === "pending" ? "checked" : "" }} @endisset />
      <label for="pending">pending</label>
    </div>
    <div>
      <input type="radio" id="sold" name="status" value="sold" @isset($result['status']) {{ $result['status'] === "sold" ? "checked" : "" }} @endisset />
      <label for="sold">sold</label>
    </div>
  </div>
  <button type="submit">Zapisz</button>
</form>

<script>
  const showEditFormBtn = document.getElementById("showEditFormBtn");
  const editForm = document.getElementById("editForm");

  showEditFormBtn.addEventListener("click", () => {
    editForm.hidden = false;
    showEditFormBtn.hidden = true;
  })
</script>
@endisset

@endsection