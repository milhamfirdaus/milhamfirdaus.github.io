<!DOCTYPE html>
<html>
	<head>
		<title>DTS CCL ITB - Task</title>
		 <link href="assets/styles.css" rel="stylesheet" type="text/css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
		 <link rel="stylesheet" href=".https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="card-container">
			<span class="pro">DTS 2020</span>
			<div class="profile">
				<img class="round" src="https://avatars0.githubusercontent.com/u/61300920?s=400&u=39d95a040c521aa2178cfd2ea57437c259ee47f7&v=4" alt="user" />
				<h5>Muhamad Ilham Firdaus</h5>
				<p>
					<i class="fas fa-map-marker-alt">&nbsp;</i> Sukabumi, &nbsp; Jawa Barat
				</p>
				<p>Mobile Developer</p>
			</div>
			<div class="buttons">
				<div class="dropdown show">
				  <a class="primary " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <i class="far fa-address-card"></i> &nbsp; Profile &nbsp;<i class="fas fa-caret-down"></i>
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size:12px !important;">
				    <a class="dropdown-item" href="#" target="_blank">
				    	<i class="fab fa-github"></i> &nbsp;Github
				    </a>
				    <a class="dropdown-item" href="#" target="_blank">
					    <i class="fab fa-linkedin"></i> &nbsp;Linkedin
					</a>
				  </div>
				 	<a class="primary ghost" data-toggle="modal" data-target="#exampleModalCenter" href="#">
						<i class="fas fa-code"></i> &nbsp; Portofolio
					</a>
				</div>
				
			</div>
			<div class="skills">
				<h6>Skills</h6>
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>Codeigniter</li>
					<li>JavaScript (Node.js)</li>
					<li>React Native</li>
					<li>Bootstrap</li>
				</ul>
			</div>
		</div>

	</body>

</html>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Portofolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-home" aria-selected="true">Sample 1</a>
		    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-profile" aria-selected="false">Sample 2</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1">
			  	<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    	<div style="background: black; overflow: hidden;">
				      		<img src="./image/2.jpg" alt="..." style="max-width: 100%; opacity: 0.7;">
				    	</div>
				    </div>
				    <div class="carousel-item">
				    	<div style="background: black; overflow: hidden;">
				      		<img src="./image/1.jpg" alt="..." style="max-width: 100%; opacity: 0.7;">
				    	</div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<div style="margin-top: 10px; padding: 5px;">
					<h5>Sample 1</h5>
  					<p>Demo : <a href="#" class="tooltip-test" title="Github" target="_blank">click here</a></p>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2">
		  		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    	<div style="background: black; overflow: hidden;">
				      		<img src="./image/4.png" alt="..." style="max-width: 100%; opacity: 0.7;">
				    	</div>
				    </div><div class="carousel-item">
				    	<div style="background: black; overflow: hidden;">
				      		<img src="./image/3.jpg" alt="..." style="max-width: 100%; opacity: 0.7;">
				    	</div>
				    </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<div style="margin-top: 10px; padding: 5px;">
					<h5>Sample 2</h5>
  					<p>Demo : <a href="#" class="tooltip-test" title="Github" target="_blank">click here</a></p>
				</div>
			  </div>
			</div>   
      </div>
    </div>
  </div>
</div>
	