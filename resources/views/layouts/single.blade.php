@include('includes.site_header')

<body class="single">

    <div class="top">
<div class="container">

@include('includes.logonav')




    </div>


</div><!--class="container" -->
</div>


<div class="mid page">
<div class="container">
    <div class="row">
        <div class="span7 l">

       @yield('listing')
       
        </div>
        <div class="span5 r" style="position: relative; top: 80px;">
       @yield('cates')
        </div>
        </div>


</div><!--class="container" -->
</div>


@include('includes.footer')



</body>
</html>
