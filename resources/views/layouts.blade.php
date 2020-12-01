<!doctype html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Book</title>
  <link rel="shortcut icon" href="img/close.png" type="image/png">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <div class= "mb-5 d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <body class="bg-dark">

      <h5 class="my-0 mr-md-auto text-white font-weight-normal"><a class="p-2 text-white" href="/">Главная</a>

      </h5>

      <form method="GET" action="{{ route('search.results') }}"

      class="form-inline ml-2">
      <nav class="my-2 my-md-0 mr-md-3">
        <input type="search"
        class="search"
        name="query"
        placeholder="Что ищем?"
        aria-label="Search">

        <button type="submit" class="btn btn-warning">
          <i class="fas fa-search">Найти</i>
        </button>
      </form>
      {{ link_to_action('BookController@getIndex', 'Объявления', null, array('class' => "btn btn-warning")) }}
      {{ link_to_action('BookController@getAdd', 'Добавить', null, array('class' => "btn btn-warning")) }}
    </body>
  </nav>

</div>


<div class = "container">

  @yield('main_contets')

</div>
</head>