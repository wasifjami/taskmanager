
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">
                    Welcome to Task Manager
                </h1>
            </div>
            
             <div class="col-lg-6">
                <h1 class="page-header">
                   <?php if($this->session->flashdata('conf'))
                   {?>
                   	
					
					<div class="alert alert-info">
						  <strong> <?php  echo $this->session->flashdata('conf');?> </strong>
					</div>
                   	
				  <?php }
				   else{ ?>
					 <p> &nbsp;</p>
					<?php } ?>
                   
                 </h1>
            </div>
            
            
     
            <div class="col-md-6">
            	
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Login Here </h4>
                    </div>
                    <div class="panel-body">
						<form method="POST" action="<?php echo site_url('home/login')?>">
							<input type="text" placeholder="Username" class="form-control" name="username" /> <br />
							<input type="password" placeholder="Password" class="form-control" name="password" />
							<br />
							<input type="submit"  name="submit" value="Login" class="btn btn-success" />							
						</form>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
        <!-- /.row -->
