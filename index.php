<?php
	require_once 'header.php';
?>

<body>
	<img src="images/homepage-picture.jpg" alt="House of Legos" />
	<nav class="navbar navbar-default">
  		<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="/">Home</a></li>
	        <li><a href="/">Collections</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Collections <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="/">Create New Category</a></li>
	            <li><a href="/">Add to Collection</a></li>
	            <li><a href="/">Remove from Collection</a></li>
	            <li><a href="/">Edit Collection</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
   	<div class="section-white">
	   	<div class="container">
	   		<br><h1>Welcome to the House of Legos</h1>
	   		<div class="row">
			  	<div class="col-md-6">
				  	<p>
				  		This site contains the Yoder family's Lego Collection.  They are avid Star Wars and Harry Potter Fans,
				  		so most of their collection is in these two categories.
				  	</p>
	   			</div>
			  <div class="col-md-6">
			  </div>
			</div>
	   	</div>
   	</div>

   	<div class="section-wrapper1">
   		<div class="container">
   			<h2>Kyle's Favorites</h2>
   			<div class="row">
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/kylo-ren-command-shuttle-75104-sm.png" alt="Kylo Ren's Command Shuttle" />
			  	</div>
			 </div>
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/batcave-6860-sm.png" alt="The Batcave" />
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/hogwarts-castle-4842-sm.png" alt="Hogwarts Castle" />
			  	</div>
			  </div>
			</div>
   		</div>
   	</div>

   	<div class="section-wrapper2">
   		<div class="container">
   			<h2>Keith's Favorites</h2>
   			<div class="row">
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/r2d2.jpg" alt="R2-D2" />
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/millenium-falcon-7965-sm.png" alt="Millenium Falcon" />
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/black-pearl-4184-sm.png" alt="Black Pearl" />
			  	</div>
			  </div>
			</div>
   		</div>
   	</div>

   	<div class="section-wrapper3">
   		<div class="container"> 
   			<h2>Janet's Favorites</h2>
   			<div class="row">
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		<img class="img-responsive" src="images/queen-annes-revenge-4195-sm.png" alt="Queen Anne's Revenge" />
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		.col-md-4
			  	</div>
			  </div>
			  <div class="col-md-4">
			  	<div class="col-box ">
			  		.col-md-4
			  	</div>
			  </div>
			</div>
   		</div>
   	</div>


<?php 
	require_once 'footer.php';
?> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
