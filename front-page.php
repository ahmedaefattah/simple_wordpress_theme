<?php get_header(); ?>

 <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" >
                  <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/img1.png '?>" alt="Image">  
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/img2.png '?>" alt="Image">     
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel"  data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  
                </a>
                <a class="carousel-control-next" href="#myCarousel"  data-slide="next">
                   <span class="carousel-control-next-icon"></span>
                  
                </a>
          </div>
   </div>



<div class="container content" >
	<div class="row">
		<div class="col-sm-12">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-12 text-center">
			     <h2>Services</h2>
          <h4><em>What We offer</em></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4">
            <div class="card">
              <div class="card-header">Lorem Ipsum</div>
              <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pulvinar interdum urna a finibus. Aliquam sed eros scelerisque nisi porta suscipit. Nulla mattis augue eu molestie viverra. Duis arcu diam, rutrum ut ipsum eu, fermentum sagittis lacus. Cras non mauris cursus arcu hendrerit iaculis. Maecenas nec enim scelerisque, venenatis lacus et, consequat mauris. Etiam quis elit ante. </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
              <div class="card-header">Lorem Ipsum</div>
              <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pulvinar interdum urna a finibus. Aliquam sed eros scelerisque nisi porta suscipit. Nulla mattis augue eu molestie viverra. Duis arcu diam, rutrum ut ipsum eu, fermentum sagittis lacus. Cras non mauris cursus arcu hendrerit iaculis. Maecenas nec enim scelerisque, venenatis lacus et, consequat mauris. Etiam quis elit ante. </div>
            </div>
        </div>	

        <div class="col-sm-4">
            <div class="card">
              <div class="card-header">Lorem Ipsum</div>
              <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pulvinar interdum urna a finibus. Aliquam sed eros scelerisque nisi porta suscipit. Nulla mattis augue eu molestie viverra. Duis arcu diam, rutrum ut ipsum eu, fermentum sagittis lacus. Cras non mauris cursus arcu hendrerit iaculis. Maecenas nec enim scelerisque, venenatis lacus et, consequat mauris. Etiam quis elit ante. </div>
            </div>
        </div>		

	</div>
	<hr>

	<div class="row">
        <div class="col-sm-12">
        	<h2 class="text-center">Our Team</h2>
        </div>

         <div class="col-sm-3">
            <div class="card">
                <img class="img-thumbnail img-responsive" src="<?php echo get_template_directory_uri() . '/assets/images/img_avatar.png '?>" alt="img_avatar" >
                <div class="card-body">
                    <h2>Name</h2>
                    <p>Job Title</p>
                    <p>Some text that describes Job</p>
                    <p>name@example.com</p>
                </div>
             </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <img class="img-thumbnail img-responsive" src="<?php echo get_template_directory_uri() . '/assets/images/img_avatar.png '?>" alt="img_avatar" >
                <div class="card-body">
                    <h2>Name</h2>
                    <p>Job Title</p>
                    <p>Some text that describes Job</p>
                    <p>name@example.com</p>
                </div>
             </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <img class="img-thumbnail img-responsive" src="<?php echo get_template_directory_uri() . '/assets/images/img_avatar.png '?>" alt="img_avatar" >
                <div class="card-body">
                    <h2>Name</h2>
                    <p>Job Title</p>
                    <p>Some text that describes Job</p>
                    <p>name@example.com</p>
                </div>
             </div>
        </div>

         <div class="col-sm-3">
            <div class="card">
                <img class="img-thumbnail img-responsive" src="<?php echo get_template_directory_uri() . '/assets/images/img_avatar.png '?>" alt="img_avatar" >
                <div class="card-body">
                    <h2>Name</h2>
                    <p>Job Title</p>
                    <p>Some text that describes Job</p>
                    <p>name@example.com</p>
                </div>
             </div>
        </div>
            
    </div>

</div>

<?php get_footer(); ?>