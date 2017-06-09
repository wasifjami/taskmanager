
<div class="container">
  <div class="row">
    <div class="col-md-1" style="">
  
  <!--
      <h3>Select Branch</h3>
  
      <select id="branch_select" onchange="branch_select()">
          <option value=""> --- </option>
        <?php foreach ($branches as $key => $value) { ?>
          <option value = "<?php echo $value['id'];?>"><?php echo $value['branch_name']; ?></option>
        <?php } ?>
          
      </select>
  -->
    </div>
   

    <div class="col-md-8">
    
      <div id="client_list">
        



        <?php foreach ($tasks as $key => $value) {
          ?>

            <div class="well">

              <div align="left">
                <h2><?php echo $value['name']; ?></h2>
                <h5><?php echo $value['description']; ?></h5>
              </div>
              <div align="right">
                Created at: <?php  echo $value['created_at']; ?><br>
                Last Changed on: <?php  echo $value['updated_at']; ?>

              </div>
              <a href="<?php echo site_url('task_home/edit_task?task_id=').$value['id']?>" class="btn btn-success"> Edit </a>
              <a href="<?php echo site_url('task_home/delete_task?task_id=').$value['id']?>" class="btn btn-danger"> Delete </a>


            </div>


        <?php } ?>


          <?php if(isset($_SESSION['message'])){?>


          <?php echo "<span class='alert-success'>". $_SESSION['message'] ."</span>";
          $_SESSION['message'] = "";
         ?>
          
          
      <?php }

      ?>

        

      </div>


    </div>

    <div class="col-md-3">
      <h3></h3>
    
        <button name ="add" class="btn btn-info" onclick="$('#add_user_form').toggle();">
          Create Task
        </button>


        <div id="add_user_form" style="display: none">
          <h3>Add Task</h3>
            <form class="form-horizontal" method="post" action="<?php echo site_url('task_home/save_task');?>">
              <div class="form-group">
              <h5>Task Title</h5>
                
                <input type="text" name="title" class="form-control" id="name">
              </div>
              <div class="form-group">
                <textarea rows="5" cols="40" name ="task_description"></textarea>
              </div>
             
              <button type="submit" onclick="" class="btn btn-default">Save</button>
            </form>
        </div>
    
       


    </div>
  </div> 
</div>


