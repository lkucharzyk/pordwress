<?php
   require("config/conn.php");
   session_start();
   
   $error = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE uname = '$myusername' and upassword = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Nieprawidłowe hasło lub login";
      }
   }
   require("incl/head.php")
?>

      <title>Logowanie - PordWress</title>
      
      
   </head>
   
   <body id=login>
	
      <section>
          <div class="container">
            <h1>Login</h1>				
            <div>            
               <form action = "" method = "post">
                  <label>Użytkownik  :</label><input type = "text" name = "username" class = "scr-dark screen"/>
                  <label>Hasło  :</label><input type = "password" name = "password" class = "scr-dark screen" />
                  <input type = "submit" value = " Zatwierdź " class='btn'/>
               </form>
               <div class='error'><?php echo $error; ?></div>					
            </div>
          </div>						
        </section>

   </body>
</html>