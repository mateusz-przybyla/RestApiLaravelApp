<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zadanie rekrutacyjne</title>
  <style>
    body {
      background-color: bisque;
    }
  </style>
</head>

<body>
  <header style="text-align: center;padding: 10px;">Zadanie rekrutacyjne - REST API Laravel</header>
  <hr />
  <main style="text-align: center; padding: 10px;">
    @yield("content")
  </main>
  <hr />
  <footer style="text-align: center; padding: 10px;">Opracował: Mateusz Przybyła</footer>
</body>

</html>