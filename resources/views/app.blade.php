<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-grid.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-reboot.css') }}">

     <title>{{ $titulo }}</title>
     </head>
 <body>
 <div id="navbar">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">Luigi Vivian</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="#">Inicio </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{route('habitos')}}">HABITOS</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{route('historicos')}}">HISTORICOS</a>
                 </li>
             </ul>
         </div>
     </nav>
 </div>

     <section class="content">
         <div id="content">
             @yield('conteudo')
         </div>
     </section>
 <script src="{{ asset('js/bootstrap/Jquery.js') }}"></script>
 <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
 <script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
 </body>

 </html>