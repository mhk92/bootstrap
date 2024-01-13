<html lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	      rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
	      crossorigin="anonymous">
	<title>project accordion</title>
	<style>
       section {
           padding: 60px 0;
       }
	</style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-secondary">
	<div class="container-xxl">
		<a href="#intro" class="navbar-brand">
			<span class="fw-bold text-warning">
				something about the project
			</span>
		</a>
		<!-- toggle button for mobile nav-->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
		        data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
		        aria-label="Toggle-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- navbar links-->
		<div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#topics" class="nav-link">about the project</a>
				</li>
				<li class="nav-item">
					<a href="#review" class="nav-link">reviews</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">get in touch</a>
				</li>
				<li class="nav-item d-md-none">
					<a href="#pricing" class="nav-link">pricing</a>
				</li>
				<li class="nav-item ms-2 d-none d-md-inline">
					<a href="#pricing" class="btn btn-primary">buy now</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- main image and intro text -->

<section id="intro">
	<div class="container-lg" style="background-color: lightgray">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-5 text-center text-md-start">
				<h1>
					<div class="display-2">black belt</div>
					<div class="display-5 text-muted">your coding skills</div>
				</h1>
				<p class="lead my-4 text-muted">Lorem ipsum dolor sit amet.</p>
				<a href="#pricing" class="btn btn-secondary btn-large">buy now</a>
			</div>
			<div class="col-md-5 text-center d-none d-md-block">
				<img class="img-fluid" src="/assets/hp_camera_photo.ico" alt="">
			</div>
		</div>
	</div>
</section>

<!-- pricing plans -->
<section id="pricing" class="bg-light mt-5">
	
	<div class="container-lg" style="background-color: lightgray">
		
		<div class="text-center">
			<h2>pricing plans</h2>
			<p class="lead text-muted">choose your pricing plan</p>
		</div>
		
		<div class="row my-5 align-items-center justify-content-center g-1">
			
			<div class="col-8 col-lg-4 col-xl-3">
				<div class="card">
					<div class="card-body text-center py-2">
						<h4 class="card-title">left card</h4>
						<p class="lead card-subtitle">card left</p>
						<img src="/assets/hp_allstars.ico" class="card-img-top" alt="something">
						<p class="display-5 my-4 text-primary fw-bold">$85.55</p>
						<p class="card-text d-none d-lg-block mx-4">card text(...)</p>
						<a href="#" class="btn btn-outline-primary">buy now</a>
					</div>
				</div>
			</div>
			
			<div class="col-8 col-lg-4">
				<div class="card border-dark border-2">
					<div class="card-body text-center py-2">
						<h3 class="card-header">card header</h3>
						<h4 class="card-title">card title</h4>
						<p class="lead card-subtitle">card subtitle</p>
						<img src="/assets/hp_application.png" class="card-img-top" alt="something">
						<p class="display-5 my-4 text-primary fw-bold">$75.99</p>
						<p class="card-text d-none d-lg-block mx-4">card text(...).</p>
						<a href="#" class="btn btn-outline-primary">buy now</a>
					</div>
				</div>
			</div>
			
			<div class="col-8 col-lg-4 col-xl-3">
				<div class="card">
					<div class="card-body text-center py-2">
						<h4 class="card-title">right card</h4>
						<p class="lead card-subtitle">card subtitle</p>
						<img src="/assets/hp_customization_control_panel.ico" class="card-img-top" alt="something">
						<p class="display-5 my-4 text-primary fw-bold">$85.55</p>
						<p class="card-text d-none d-lg-block mx-4">card text(...)</p>
						<a href="#" class="btn btn-outline-primary">buy now</a>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</section>

<!-- topic at a glance -->
<section id="topics">
	<div class="container-md" style="background-color: #BFF1DE">
		<div class="text-center">
			<h2>inside the project</h2>
			<p class="lead text-dark">Lorem ipsum dolor sit amet.</p>
		</div>
		
		<div class="row my-5 g-5 justify-content-around align-items-center">
			<div class="col-6 col-lg-4">
				<img src="/assets/hp_boy.png" class="img-fluid" alt="happy boy">
			</div>
			<!-- accordion -->
			<div class="col-lg-6">
				<div class="accordion" id="chapters">
					<div class="accordion-item" style="background-color: #BADDF4 ">
						<h2 class="accordion-header" id="heading-1">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
							        data-bs-target="#chapter-1" aria-expanded="true"
							        aria-controls="chapter-1">
								<strong>chapter number one</strong>
							</button>
						</h2>
						<div id="chapter-1" class="accordion-collapse collapse"
						     aria-labelledby="heading-1" data-bs-parent="#chapters">
							<div class="accordion-body">
								<p>Lorem ipsum dolor sit amet.</p>
								<p>Lorem ipsum dolor sit amet.</p>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item" style="background-color: #CBBAF4 ">
						<h2 id="heading-2" class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
							        data-bs-target="#chapter-2" aria-expanded="true"
							        aria-controls="chapter-2">
								<strong>chapter number two</strong>
							</button>
						</h2>
						<div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
						     data-bs-parent="#chapters">
							<div class="accordion-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Accusamus beatae consequatur libero maxime nihil nostrum tempora.
									Amet fuga id ipsum non quae, voluptatibus. Architecto aut consequatur
									corporis impedit iure maxime molestias necessitatibus nulla placeat quos,
									recusandae repellat sunt temporibus veritatis vero, voluptatem voluptates!
									A ab earum in magnam, optio voluptate?</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 id="heading-3" class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
							        data-bs-target="#chapter-3" aria-expanded="true"
							        aria-controls="chapter-3">
								<strong>chapter number three</strong>
							</button>
						</h2>
						<div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
						     data-bs-parent="#chapters">
							<div class="accordion-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Accusamus beatae consequatur libero maxime nihil nostrum tempora.
									Amet fuga id ipsum non quae, voluptatibus. Architecto aut consequatur
									corporis impedit iure maxime molestias necessitatibus nulla placeat quos,
									recusandae repellat sunt temporibus veritatis vero, voluptatem voluptates!
									A ab earum in magnam, optio voluptate?</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 id="heading-4" class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
							        data-bs-target="#chapter-4" aria-expanded="true"
							        aria-controls="chapter-4">
								<strong>chapter number four</strong>
							</button>
						</h2>
						<div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
						     data-bs-parent="#chapters">
							<div class="accordion-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Accusamus beatae consequatur libero maxime nihil nostrum tempora.
									Amet fuga id ipsum non quae, voluptatibus. Architecto aut consequatur
									corporis impedit iure maxime molestias necessitatibus nulla placeat quos,
									recusandae repellat sunt temporibus veritatis vero, voluptatem voluptates!
									A ab earum in magnam, optio voluptate?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- reviews list -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>