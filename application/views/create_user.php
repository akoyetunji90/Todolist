<html>
  <body>
  <h2>Create User</h2>
  <?php 
  if($userId!=""){
      echo "<h3>Successful , your ID is $userId</h3>";
      }
      ?>
      
    <?php echo form_open("/user/createuser");
    ?>
   <div>
    <input name ="fullname" type="text" placeholder="Fullname" value="<?php echo set_value("fullname");?>" /><i><?php echo form_error("fullname");?></i> </div>

   <div> <input name ="username" type="text" placeholder="Username" value="<?php echo set_value("username"); ?>" /> <i><?php echo form_error("username");?></i></div>

   <div> <input name ="password" type="password" placeholder="Password"/> <i><?php echo form_error("password");?></i></div>

   <div> <input name ="submit" type="submit" /></div>
  </body>

</htm>