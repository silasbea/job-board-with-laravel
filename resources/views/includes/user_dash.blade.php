<?php $currentPage = basename(Request::url()); ?>
<ul class="dash ui-widget-content" style="margin-bottom: 40px;">

       <p class="acctname"><img src="{{ URL::asset('img/avatar.jpg') }}" />
<br /> {{session()->get('logged')}} <br /> </p>
       
      @if(session()->get('who') == 'user')

       <li @if($currentPage == 'avatar') id = 'here' @endif><a href="/user/avatar"><img src="{{ URL::asset('img/avatar.png') }}" /> Attach Avatar</a></li>        
       <li @if($currentPage == 'bio') id = 'here' @endif><a href="/user/bio"><img src="{{ URL::asset('img/bio.png') }}" /> Update Bio</a></li>

       <li @if($currentPage == 'post') id = 'here' @endif><a href="/user/post"><img src="{{ URL::asset('img/go.png') }}" /> Post Work </a></li>
       <li @if($currentPage == 'posts' || $currentPage == 'edit') id = 'here' @endif><a href="/user/posts"><img src="{{ URL::asset('img/sales.png') }}" /> History </a></li>
       <li @if($currentPage == 'pass' || $currentPage == 'edit') id = 'here' @endif><a href="/user/pass"><img src="{{ URL::asset('img/settings.png') }}" /> Change Password </a></li>
       <li><a href='/'><img src="{{ URL::asset('img/power.png') }}" /> Sign Out </a></li>
     @endif
     
      @if(session()->get('who') == 'creative')
     
       <li @if($currentPage == 'avatar') id = 'here' @endif><a href="/user/avatar"><img src="{{ URL::asset('img/avatar.png') }}" /> Attach Avatar</a></li>        
       <li @if($currentPage == 'profile') id = 'here' @endif><a href="/user/profile"><img src="{{ URL::asset('img/bio.png') }}" /> My Profile</a></li>

       <li @if($currentPage == 'pass' || $currentPage == 'edit') id = 'here' @endif><a href="/user/pass"><img src="{{ URL::asset('img/settings.png') }}" /> Change Password </a></li>
       <li><a href='/'><img src="{{ URL::asset('img/power.png') }}" /> Sign Out </a></li>
       
      @endif

            @if(session()->get('who') == 'admin1')
     
       <li @if($currentPage == 'catecreate') id = 'here' @endif><a href="/user/catecreate"><img src="{{ URL::asset('img/go.png') }}" /> Create Cate</a></li>        
     

       <li @if($currentPage == 'pass' || $currentPage == 'edit') id = 'here' @endif><a href="/user/pass"><img src="{{ URL::asset('img/settings.png') }}" /> Change Password </a></li>
       <li><a href='/'><img src="{{ URL::asset('img/power.png') }}" /> Sign Out </a></li>
       
      @endif
       
       </ul>
