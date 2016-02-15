<div id="div-menu">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.html">Watch Snooker</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
		  	<li class="active"><a href="' . BASE_URL . '">Home <span class="sr-only">(current)</span></a></li>';
		    <li><a href="live.html">Live Events</a></li>
		    <li><a href="newsletter.html">Newsletter</a></li>
		    <li><a href="rules.html">Snooker Rules</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="admin.html">Admin</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="about.html">About</a></li>
	            <li><a href="ideas.html">Ideas</a></li>
	            <li><a href="check.html">Check Sheet</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>
<script>
	num = Math.floor((Math.random() * 3) + 1);
	document.write('<img height="247px" src="img/banner' + num + '.jpg">');
</script>