		 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url()?>">	<img src="<?php echo base_url('images/logo.png')?>" /></a>
                <a class="navbar-brand" style="color: #fff" href="<?php echo site_url()?>">	Soding</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    
                   <?php 
                   	if( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1){?> 
                    <li>
                        <a href="<?php echo site_url('home/logout')?>">Logout</a>
                    </li>
                    <?php } ?>
             
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>