function getTop(){
	var html = '<div id="div-menu">'+
		'	<nav class="navbar navbar-inverse">'+
		'	  <div class="container-fluid">'+
		'	    <!-- Brand and toggle get grouped for better mobile display -->'+
		'	    <div class="navbar-header">'+
		'	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">'+
		'	        <span class="sr-only">Toggle navigation</span>'+
		'	        <span class="icon-bar"></span>'+
		'	        <span class="icon-bar"></span>'+
		'	        <span class="icon-bar"></span>'+
		'	      </button>'+
		'	      <a class="navbar-brand" href="index.html">Watch Snooker</a>'+
		'	    </div>'+
		'	    <!-- Collect the nav links, forms, and other content for toggling -->'+
		'	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">'+
		'	      <ul class="nav navbar-nav">'+
		'		  	<li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>'+
		'		    <li><a href="live.html">Live Events</a></li>'+
		'		    <li><a href="newsletter.html">Newsletter</a></li>'+
		'		    <li><a href="rules.html">Snooker Rules</a></li>'+
		'	      </ul>'+
		'	      <ul class="nav navbar-nav navbar-right">'+
		'	        <li><a href="admin.html">Admin</a></li>'+
		'	        <li class="dropdown">'+
		'	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>'+
		'	          <ul class="dropdown-menu">'+
		'	            <li><a href="about.html">About</a></li>'+
		'	            <li><a href="ideas.html">Ideas</a></li>'+
		'	            <li><a href="check.html">Check Sheet</a></li>'+
		'	          </ul>'+
		'	        </li>'+
		'	      </ul>'+
		'	    </div><!-- /.navbar-collapse -->'+
		'	  </div><!-- /.container-fluid -->'+
		'	</nav>'+
		'</div>';

	$( "#top" ).append(html);

	num = Math.floor((Math.random() * 3) + 1);
	$( "#top" ).append("<img height='247px' src='../img/banner" + num + ".jpg'>");
}

function getFooter(){
	var html = '<nav class="navbar navbar-default">'+
	'	  <div class="container-fluid">'+
	'	    <!-- Brand and toggle get grouped for better mobile display -->'+
	'	    <div class="navbar-header">'+
	'	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">'+
	'	        <span class="sr-only">Toggle navigation</span>'+
	'	        <span class="icon-bar"></span>'+
	'	        <span class="icon-bar"></span>'+
	'	        <span class="icon-bar"></span>'+
	'	      </button>'+
	'	      <a class="navbar-brand" href="#">Watch Snooker</a>'+
	'	    </div>'+
	'	    <!-- Collect the nav links, forms, and other content for toggling -->'+
	'	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">'+
	'	      <ul class="nav navbar-nav navbar-right">'+
	'	        <li><a href="mailto:w.rodriguespereira@eagle.clarion.edu">w.rodriguespereira@eagle.clarion.edu</a></li>'+
	'	      </ul>'+
	'	    </div><!-- /.navbar-collapse -->'+
	'	  </div><!-- /.container-fluid -->'+
	'	</nav>';

	$( "#footer" ).append(html);
}

function getUnderConstructionPage(){
	var html = '<div class="alert alert-danger text-center under-construction-alert" role="alert">'+
    	'<b>I\'m Sorry!</b> This page is still under construction.'+
    '</div>';

	$( "#underConstruction" ).append(html);
}