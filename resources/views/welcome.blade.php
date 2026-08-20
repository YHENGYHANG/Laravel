{{-- <div><h2>Hi idol</h2></div> --}}
<DOCTYPE! html>
<html>
    <head>
        <title>About</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>

        <h1>About</h1>
        <p>My name is YHANG</p>
        <p>My age is 20</p>

    <div class="yawa">
        <button class="btn btn-success px-50 py-50 rounded-5" onclick="alert('You clicked me!') ">Click Me</button>
    </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> --}}
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>


<style>
    .yawa {
        display: flex;
        justify-content: center;



    }
