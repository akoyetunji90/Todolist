<html>
  <body>
    <table>
    <tr>
    <th>ID</th>
    <th>Fullname</th>
    <th>Username</th>
    <th>Delete User</th>
    <tr>
    <?php
     foreach($users as $user){
        echo '<tr>
          <td>'.$user->id.'</td>
          <td>'.$user->fullname.'</td>
          <td>'.$user->username.'</td>
          <td><a href="'.site_url("/user/updateuser?userId=").$user->id.'">'.$user->fullname.'</a></td>
        </tr>';
     }
    ?>
    </table>
  </body>

</htm>