<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ URL::asset('img/favicon-log.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <h1 class="bg-slate-600 text-5xl">Vamos a dar lo mejor de nosotros 👍🏻</h1>
</body>

</html>
