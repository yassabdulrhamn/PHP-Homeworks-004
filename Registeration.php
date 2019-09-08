
<!DOCTYPE html>
<!-- Registration -->
<?php
   


	if(isset($_GET['submit']))
{
	
		 $link = mysqli_connect("localhost", "root", "", "web");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
		
		$sql = "INSERT INTO `table`  VALUES ('".$_GET['firstname']."', '".$_GET['medname']."', '".$_GET['lastname']."', '".$_GET['mobile']."', '".$_GET['age']."', '".$_GET['gender']."', '".$_GET['email']."', '".$_GET['Nationality']."', '".$_GET['Living']."', '".$_GET['category']."', '".$_GET['profession']."');";

    if(mysqli_query($link, $sql)){

        echo "Done.";

    } else{

        echo "ERROR";

    }

     

    // Close connection

    mysqli_close($link);
		
		
		
		//$_GET['category']
}
    

    ?>
<html>
   <head>
      <meta charset="utf-8">
      <title>Registration</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <div id="wrapper">
         <div id="header">
            <div id="logo">
               <img src="logo.png" style="width:150px ; height:100px;" />
            </div>
            <nav>
               <ul>
                  <li>
                     <a href="home.html" style="font-size:11pt;">
                     <img src="home.png" style="width:30px;height:25px;" />
                     Home
                     </a>
                     <ul>
                        <li><a href="Welcome.html" style="text-align:left;"><img src="task.png" style="width:30px;height:30px;" />Welcome</a></li>
                        <li><a href="About_us.html" style="text-align:left;"><img src="task.png" style="width:30px;height:30px;" />About us</a></li>
                        <li><a href="Contact_us.html" style="text-align:left;"><img src="task.png" style="width:30px;height:30px;" />Contact us</a></li>
						<li><a href="Projects.html" style="text-align:left;"><img src="task.png" style="width:30px;height:30px;" />Projects</a></li>
                        <li><a href="Registeration.php" style="text-align:left;"><img src="task.png" style="width:30px;height:30px;" />Registeration</a></li>
                        <li><a href="Customers.php" style="text-align:left;"><img src="task.png" style="width:30px;height:30px;" />Customer Page</a></li>
                     </ul>
                  </li>
                  <li><a href="Welcome.html" style="font-size:11pt;">
                     Welcome</a>
                  </li>
                  <li><a href="About_us.html" style="font-size:11pt;">
                     About us</a>
                  </li>
                  <li><a href="Contact_us.html" style="font-size:11pt;">
                     Contact us </a>
                  </li>
				  <li><a href="projects.html" style="font-size:11pt;">
                     Projects </a>
                  </li>
                  <li><a href="Registeration.php" style="font-size:11pt;">
                     Registeration </a>
                  </li>
                  <li><a href="Customers.php" style="font-size:11pt;">
                     Customers</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div style="width:100%; height:auto; background-color:rgba(10, 0, 50, 0.9); text-align: center;">
            <br />
            <br />
            
            <h3> Registeration </h3>
            <form action="Registeration.php" method="get">
            First name:<br>
            <input type="text" name="firstname">
            <br>
            meddelie name:<br>
            <input type="text" name="medname" >
            <br>
            Last name:<br>
            <input type="text" name="lastname" >
            <br>
            gender:<br>
            <select name="gender">
               <option value="Male">Male</option>
               <option value="Female">Female</option>
            </select>
            <br>
            age:<br>
            <input type="date" name="age" >
            <br>
            mobile:<br>
            <input type="number" min="0" max="0599999999" name="mobile" >
            <br>
            email:<br>
            <input type="email" name="email" >
            <br>
            how did you know about us:
            <br>
             Nationality:<br>
            <input type="text" name="Nationality" >
            <br>
             Living in:<br>
            <input type="text" name="Living" >
            <br>
			Profession:<br>
            <input type="text" name="profession" >
            <br>
            <select name="category">
               <option value="twitter">twitter</option>
               <option value="friend">friend</option>
               <option value="ads">Ads</option>
               <option value="others">others</option>
            </select>
            <br>
            <input type="submit" name="submit">
				<br>
        <button type="reset"><img src="edit_clear.png" width="50" /></button>
        </form>
         </div>
         <div id="page-bottom">
            <div style="text-align:center;">
               <h5>  All rights reserved &copy; 2017 <br>
               <a href="mailto:4lhussaini@gmail?Subject=Imam" target="_top"> 4lhussaini@gmail </a> | <a href="mailto:anas.su3@gmail.com?Subject=Imam" target="_top">anas.su3@gmail.com</a> | <a href="mailto:azoo_502@hotmail.com?Subject=Imam" target="_top"> azoo_502@hotmail.com </a>
                 </h5>
            </div>
         </div>
      </div>
      <div id="footer">
      </div>
   </body>
</html>