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

-   zainstaluj wymagane zależności:

```bash
  composer install
```

-   nie ma konieczności konfigurowania pliku .env oraz połączenia z bazą danych,
-   będąc w katalogu projektu, uruchom aplikację lokalnie komendą:

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

-   Komunikat informujący o edycji wybranego zwierzęcia:

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
