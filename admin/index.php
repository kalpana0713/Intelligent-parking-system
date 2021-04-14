<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	     <title>Admin Login</title>
    </head>
      <body >
  
					<?php
						if(isset($_SEESION['msg'])){
						//	echo 12;
							echo $_SEESION['msg'];

							unset($_SEESION['msg']);
						}
					 ?>
			        <form method="post" action="action/dologin.php">
              <table>
              	<tr>
                  <td>User name</td>
                   <td>
                    <input type="text" name="username" placeholder="username">
                    </td>
                </tr>
                <tr>
                  <td>password</td>
                  <td>
                    <input type="text" name="password" placeholder="password">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="submit" value="submit">
                  </td>
                </tr>

              	</table>
            </form>
          
       </body>
</html>