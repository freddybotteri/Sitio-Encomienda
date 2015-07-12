

<div class="box ">
   <div class="row">	               
	                <div class="col-md-6">
	                      <h1>Ultimos</h1> 
	                       	<p> Lorem ipsum dolor sit amet, consectetur a pariatur in nesciunt cum, vitae quod.</p>
	                       
	                    </div>
	                    <div class="col-md-6">
	                     <h1>2015</h1> 
	                       	<p> All Rights Reserved.<br/></p>
	                        
	                    </div>
	</div>                     
</div>
	              
<a class="go-top btn btn-success" href="#">Subir</a>
<!-- JavaScript -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script>

    $(document).ready(function() {

      // Show or hide the sticky footer button
      $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
          $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }

      });
      // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
      })

    });

  </script>

	</div>
