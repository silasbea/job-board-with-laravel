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
        <div class="span3">

       @yield('avatar')
        </div>
        <div class="span6">

       @yield('me')
        </div>
        </div>


</div><!--class="container" -->
</div>


@include('includes.footer')



</body>
</html>
