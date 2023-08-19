$w = jQuery.noConflict(); 
$w(document).ready(function(){
  $w('.form').validate({
    rules: {
      fullname: {
        required: true
      },
      user: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
    
      psw: {
        minlength: 6,
        required: true
      },
      psw2: {
        equalTo: "#pword"
      },
            secret: {
        required: true
      },
            answer: {
        required: true
      },
	
      website: {
        required: true
        
      },
       newpass: {
        minlength: 6,   
        required: true
        
      },
    
      address: {
        required: true
      },
            title: {
        required: true
        
      },
            cafe: {
        required: true
        
      },
    
            cate: {
        required: true
        
      },
          
          exp: {
        required: true
        
      }
	
	
    },
    success: function(label) {
      label.text('').addClass('valid');
    }
  });
  
   
   
});

