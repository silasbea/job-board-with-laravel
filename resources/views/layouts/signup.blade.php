@include('includes.site_header')

<body class="signup">

<div class="container">
    <div class="row">
        <div class="span7 logo">
            <a href="/"><img src="{{ URL::asset('img/logo.png') }}" /></a>
        </div>
    </div>
    
       <div class="row"> 
        <div class="offset7 span4 login">
            
            @yield('signup')
            @yield('signin')
            @yield('recover')
           
       
        </div>
     </div>   
</div><!--class="container" -->
	
</body>
</html>
