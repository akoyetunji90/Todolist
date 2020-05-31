<html>
  <body>
  <h2>Update User</h2>
  
    <?php echo form_open("/user/updateuserrecord");?>
    
   <div> <input name ="fullname" type="text" placeholder="Fullname" value="<?php echo $record[0]->fullname;?>" /> </div>
   <div> <input name ="username" type="text" placeholder="Username" value="<?php echo $record[0]->username;?>" /> </div>
   <div> <input name ="password" type="password" placeholder="xxxxxxx" /> </div>
   <div><input type="hidden" name="user_id" value="<?php echo $record[0]->id;?>"/></div>
   <div> <input name ="submit" type="submit" /></div>
    </form>
  </body>

</htm>