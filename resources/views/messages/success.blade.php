
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- <title>{{ $titulo }}</title> --}}
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
@extends('layouts.navbar')
<section  style="height: 100vh;"   class="page-section bg-primary  text-white mb-0  " >
<div>
    <h1 style="text-align: center; margin-top: 50px;">¡Mensaje Enviado con Exito!</h1>
    <!--<p>{{ session('success') }}</p>-->
</div>
</section>
</html>






