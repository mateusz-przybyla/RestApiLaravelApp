# REST API Laravel App

## Overview

Prosty interfejs do komunikacji z Swagger Petstore API.

Wymagania: operacje CRUD, czyli umożliwienie dodawania, pobierania, edytowania i usuwania elementów w zasobie /pet, wraz z obsługą błędów.

## How to start

Uruchom projekt lokalnie na swoim pc:

-   włącz XAMPP Control Panel oraz uruchom Apache serwer,
-   pobierz repozytorium na swój lokalny komputer do folderu /htdocs,

```bash
  git clone https://github.com/mateusz-przybyla/RestApiLaravelApp.git
```

-   przejdź do katalogu projektu:

```bash
  cd RestApiLaravelApp
```

-   zainstaluj wymagane zależności:

```bash
  composer install
```

-   zmień nazwę pliku konfiguracyjnego z .env.example na .env,
-   utwórz bazę danych o nazwie np. `laravel` i skonfiguruj połączenie z bazą danych MySQL:

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
```

-   uruchom migracje:

```bash
  php artisan migrate
```

-   wygeneruj klucz aplikacji:

```bash
  php artisan key:generate
```

-   uruchom serwer deweloperski:

```bash
  php artisan serve
```

-   otwórz przeglądarkę i uruchom stronę lokalnie: http://localhost:8000/

## Screenshots

-   Menu główne:

![](./readme/main-menu.jpg)

-   Formularz dodawania nowego zwierzęcia:

![](./readme/create-form.jpg)

-   Komunikat informujący o dodaniu nowego zwierzęcia i przekierowanie na stronę, gdzie można wyszukać zwierzę:

![](./readme/create-message.jpg)

-   Wynik wyszukiwania utworzonego zwierzęcia:

![](./readme/search-result.jpg)

-   Formularz edycji danych zwierzęcia:

![](./readme/edit-form.jpg)

-   Komunikat informujący o edycji wybranego zwierzęcia(zmieniono nazwę na: tygrys2 i status na: sold):

![](./readme/edit-message.jpg)

-   Wynik wyszukiwania edytowanego zwierzęcia (zmieniono nazwę na: tygrys2 i status na: sold):

![](./readme/edited-result.jpg)

-   Komunikat informujący o usunięciu wybranego zwierzęcia:

![](./readme/delete-message.jpg)

-   Wynik wyszukiwania usuniętego zwierzęcia:

![](./readme/deleted-result.jpg)

-   Możliwość wyświetlenia wszystkich dostępnych wyników po wybranym statusie:

![](./readme/search-by-status.jpg)

## Built with

-   PHP, Laravel, HTML, CSS, JavaScript,
-   Composer - zarządzanie zależnościami.

## Useful resources

-   https://laravel.com/docs/12.x
-   https://petstore.swagger.io
