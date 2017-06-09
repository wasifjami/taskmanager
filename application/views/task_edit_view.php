
<div class="container">
  <div class="row">
    <div class="col-md-1" style="">
 
    </div>
   

    <div class="col-md-8">
    
      <div id="client_list">
        



        <?php foreach ($tasks as $key => $value) {
          ?>

            
          <h3></h3>
     
              
               
            <div class="form-group ">
              <form class="form-horizontal" method="post" action="<?php echo site_url('task_home/save_edited_task');?>">
              <label>Task Title </label>
                  <input type="text" name="title" size="35" value=" <?php echo $value['name']; ?>" class="form-control" id="name">
                  
            </div>
      
            <div class="form-group col-xs-8">
              <label>Task Description </label>
              <textarea rows="8" cols="80"  name ="task_description"><?php echo $value['description']; ?></textarea>
            </div>
            
              <div class="col-xs-8">
                <button type="submit" onclick="" class="btn btn-success">Save</button>

                </div>
                <input type="hidden" name="task_id" value= "<?php echo $value['id']?>">
            </form>          


        <?php } ?>



        

      </div>


    </div>

    <div class="col-md-3">
      


    </div>
  </div> 
</div>


