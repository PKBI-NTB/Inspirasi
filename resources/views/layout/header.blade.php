<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="icon" href="img/logofoot.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite(['resources/css/app.css','resources/js/app.js'])

   <!-- Tambahkan Google Fonts Poppins -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
   @vite('resources/css/app.css')

   <style>
       body {
           font-family: 'Poppins', sans-serif;
       }
   </style>
</head>