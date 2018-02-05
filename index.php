<style type="text/css">
	#headerContainer {
		margin-top: 100px;
	}

@media only screen and (max-width : 992px){
	#headerContainer {
		margin-top: 50px;
	}
}

@media only screen and (max-width : 600px){
	#headerContainer {
		margin-top: 70px;
	}
}

</style>

<?php

function display_title(){
	echo "Home";
}

function display_content(){?>

<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
	    <div class="container" id="headerContainer">
	        <h4 class="header center teal-text text-lighten-2"><strong>Good People Good Vibes Good Life</strong></h4>
	      	<div class="row center">
	          <h5 class="header col s12 light" style="color: grey">The Good Life Crew Manila</h5>
	    </div>
<?php if(isset($_SESSION['name'])){

    }else{
    	?>
    	
    	<div class="row center">
	    	<a href="register.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 loginButton"><strong>Login</strong></a>
	        <a href="register.php#register" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 regButton"><strong>Register</strong></a>
	    </div>
	    <?php
    }
?>

	   <br><br>

	</div>
</div>

<div class="parallax"><img src="img/bg1.jpeg" alt="Unsplashed background img 1" class="responsive-Img" style="min-width: 195%"></div>
</div>


 <div class="container">
    <div class="section">
			<!--   Icon Section   -->
				<div class="row">
				    <div class="col s12 m4">
				        <div class="icon-block">
				        <h2 class="center brown-text"><i class="material-icons" style="color: #000;">camera</i></h2>
				        <h5 class="center">Up to date Fashion</h5>

				        <p class="light">We provide tailored Solutions for your street fashion needs. Additionally, we refined shirt designs and concepts to provide the customer needs.</p>
				    </div>
				</div>

			    <div class="col s12 m4">
			        <div class="icon-block">
			        <h2 class="center brown-text"><i class="material-icons" style="color: #000;">content_cut</i></h2>
			        <h5 class="center">TGLC Designs</h5>

			        <p class="light">We are a team of young, driven designers that bend each other's rules and test the industry's limits, We convert our knowledge and expertise into a defined set of goals, personas and overall design visions for our clients.
			        </p>
			        </div>
			    </div>

			    <div class="col s12 m4">
			        <div class="icon-block">
			        <h2 class="center brown-text"><i class="material-icons" style="color: #000;">local_shipping</i></h2>
			        <h5 class="center">Shipping made easy.</h5>

			        <p class="light">We know success is made up of different elements: effective products, streamlined processes and reliable designs. We take this precept to heart and it is why our items are delivered on time.</p>
			    </div>
		    </div>
    	</div>
    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      	<div class="container">
        	<div class="row center">
          	<h5 class="header col s12 light">A modern fashion for Hypebeast and  Millenials alike</h5>
        	</div>
      	</div>
    </div>

   	<div class="parallax"><img src="img/bg2.jpeg" alt="Unsplashed background img 2" class="responsive-Img" style="min-width: 185%"></div>
  	</div>

<div class="container">
    <div class="section">
      	<div class="row">
	        <div class="col s12 center">
	          <h3><i class="mdi-content-send brown-text"></i></h3>
	          <h3>Contact Us</h3>
	          <p class="left-align light center-align">
	          Feel free to reach out to us via email at <strong>goodlifecrewmanila@gmail.com</strong>, The Good Life Crew was founded in 2015 by a group of people who love street fashion. All brand logos, styles and concepts are owned by The Good Life Crew Manila. All rigths reserved 2015.</p>	
	        </div>
      	</div>
    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      	<div class="container">
        	<div class="row center">
          	<h5 class="header col s12 light">A modern fashion based on modern Material Design</h5>
        	</div>
      	</div>
    </div>
    

<div class="parallax"><img src="img/bg3.jpeg" alt="Unsplashed background img 3" class="responsive-Img" style="min-width: 185%"></div>
</div>


<?php
}


require "template.php";

?>