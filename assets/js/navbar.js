document.write('\
  	<div class="navbar" id="navBar">\
      	<a href="">Planning Poker</a>\
      	<!-- This could be added if multiple sessions are implemented\
        <a href="">Sessions></a>-->\
    	<a href="">Contact Us</a>\
		<a href="">About</a>\
		<a href="" class="login">Login</a>\
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">\
			<i class="fa fa-bars"></i>\
		</a>\
  	</div> \
  	<script>\
		function myFunction() {\
		    var x = document.getElementById("navBar");\
		    if (x.className === "navbar") {\
		        x.className += " responsive";\
		    } \
		    else {\
		        x.className = "navbar";\
		    }\
		}\
  	</script>\
');