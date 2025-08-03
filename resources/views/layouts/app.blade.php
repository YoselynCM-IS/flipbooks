<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>e-book</title> 
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <!-- FA FA ICONS -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    </head>
    <body>
        @yield('navigate')
        <div id="app">
            @yield('search')
            @yield('book')
        </div>
        <!-- Scripts -->
        <!-- SCRIPT PARA LA BUSQUEDA POR PAGINA -->
        <script src="{{ asset('js/search.js') }}"></script>
        <!-- SCRIPT PARA QUE FUNCIONE FLIPBOOK -->
        <script src="{{ asset('js/book/extras/jquery.min.1.7.js') }}"></script>
        <script src="{{ asset('js/book/extras/modernizr.2.5.3.min.js') }}"></script>
        <script src="{{ asset('js/book/lib/hash.js') }}"></script>  
        <!-- SWEETALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
            // Para deshabilitar el click derecho sobre la web
            document.oncontextmenu = function(){return false}

            var isCtrl = false;
            document.onkeyup=function(e){
                if(e.which == 17) isCtrl=false;
            }
            document.onkeydown=function(e){
                if(e.which == 17) isCtrl=true;
                if((e.which == 80 || e.which == 83 || e.which == 85) && isCtrl == true) {
                    //Combinancion de teclas CTRL+S,U, P y bloquear su ejecucion en el navegador
                    return false;
                }
                if(isCtrl == true && e.which == 16 && e.which == 67){
                    // CTRL + SHIFT + C
                    return false;
                }
            }
        </script>
        @yield('scripts')
    </body>
</html>

