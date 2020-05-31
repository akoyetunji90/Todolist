<html>
  <body>
    <table>
    <tr>
    <th>ID</th>
    <th>Fullname</th>
    <th>Username</th>
    <tr>
    <?php
     foreach($users as $user){
        echo '<tr>
          <td>'.$user->id.'</td>
          <td>'.$user->fullname.'</td>
          <td>'.$user->username.'</td>
        </tr>';
     }
    ?>
    </table>
  </body>

</htm>