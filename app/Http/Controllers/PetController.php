<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetController extends Controller
{
  private $url = 'https://petstore.swagger.io/v2/pet/';

  public function __construct() {}

  public function index()
  {
    return view('index');
  }

  public function idView()
  {
    return view('pet.id');
  }

  public function statusView()
  {
    return view('pet.status');
  }

  public function createView()
  {
    return view('pet.create');
  }

  public function getPetById(Request $request)
  {
    $petId = $request->id;
    $urlEndpoint = $this->url . $petId;

    $response = Http::retry(3, 200, null, false)->get($urlEndpoint);

    if ($response->failed()) {
      return back()->with('error', 'Nie udało się pobrać danych lub zwierzę nie istnieje.');
    }

    $result = $response->json();

    return view('pet.id', compact('result'));
  }

  // *** zamiennie mozna uzyc funkcji curl_init ***

  /*public function getPetById(Request $request)
  {
    $petId = $request->id;
    $urlEndpoint = $this->url . $petId;

    $curl = curl_init($urlEndpoint);
    curl_setopt_array($curl, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
      ],
    ]);
    $result = json_decode(curl_exec($curl), true);
    $error = curl_error($curl);
    curl_close($curl);

    if ($error) {
      return back()->with('error', 'Nie udało się pobrać danych.');
    }
    if (isset($result['code'])) {
      return back()->with('error', 'Zwierzę nie istnieje.');
    }
    return view('pet.id', compact('result'));
  }*/

  public function getPetByStatus(Request $request)
  {
    $status = $request->status;
    $urlEndpoint = $this->url . "findByStatus";

    $response = Http::get($urlEndpoint, ['status' => $status]);

    if ($response->failed()) {
      return back()->with('error', 'Nie udało się pobrać danych lub nie ma dostępnych zwięrząt.');
    }

    $results = $response->json();

    return view('pet.status', compact('results'));
  }

  public function createPet(Request $request)
  {
    $randomId = rand(100001, 999999);

    $response = Http::post($this->url, [
      'id' => $randomId,
      'category' => null,
      'name' => $request->name,
      'photoUrls' => ["string"],
      'tags' => null,
      'status' => $request->status
    ]);

    return $response->successful()
      ? redirect()->route('pet.idView')->with('message', 'Dodano zwierzę o id=' . $randomId)
      : back()->with('error', 'Nie dodano zwierzęcia.');
  }

  public function editPet(Request $request, int $id)
  {
    $response = Http::put($this->url, [
      'id' => $id,
      'category' => null,
      'name' => $request->name,
      'photoUrls' => ["string"],
      'tags' => null,
      'status' => $request->status
    ]);

    return $response->successful()
      ? back()->with('message', 'Edytowano zwierzę o id=' . $id)
      : back()->with('error', 'Nie edytowano zwierzęcia.');
  }

  public function deletePet(int $id)
  {
    $urlEndpoint = $this->url . $id;

    $response = Http::delete($urlEndpoint);

    return $response->successful()
      ? back()->with('message', 'Usunięto zwierzę o id=' . $id)
      : back()->with('error', 'Nie usunięto zwierzęcia.');
  }
}
