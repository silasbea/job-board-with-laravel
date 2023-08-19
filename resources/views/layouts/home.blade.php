@include('includes.site_header')

<body class="home">
    
    <div class="top">
<div class="container">
  
@include('includes.logonav')
        
        <div class="row">
            <div class="container">
                <div class="offset3 span6">
            <p class="intro"> Job Board for Designers, Programmers and Creatives </p>
          </div>
         </div>
        </div>
        
        
    </div><!--class="container" -->
    
        
</div>

	
    
<div class="mid">
<div class="container">
    <div class="row">
        <div class="span7">
       @yield('find')       
       @yield('listing') 
        </div>
        <div class="span5">
       @yield('cates')          
        </div>
        </div>
    
        
</div><!--class="container" -->
</div>


@include('includes.footer')
    
<script type='text/javascript'>
$k = jQuery.noConflict(); 
$k(document).ready(function() {
$k('ul.listing li:odd').css('background-color','#f8fafb');
$k('ul.listing li:even').css('background-color','#e1e1f4');
});
</script> 

</body>
</html>
