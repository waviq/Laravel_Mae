
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/w3schools.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<body class="w3-content" style="max-width:1300px">

@yield('content')

<!-- Third Grid: Swing By & Contact -->
<div class="w3-row" id="contact">

</div>

<!-- Footer -->
<div class="container">
    <footer style="text-align: center" class="w3-container w3-black w3-padding-16">
        <p>Powered by <a href="#" target="_blank">Mr. X</a></p>
    </footer>
</div>



<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/jquery/typed.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>