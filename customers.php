<!DOCTYPE html>
<!-- Contact_us -->
<html>
   <head>
      <meta charset="utf-8">
      <title>customers</title>
       
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
            
<div style="overflow-x:auto;">
  <table>
    <tr id="tablerow">
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Last name</th>
      <th>Date of birth</th>
      <th>mobile</th>
      <th>gender</th>
      <th>email</th>
      <th>Nationality</th>
      <th>Living in</th>
      <th>Know us by</th>
	  <th>Profession</th>
    </tr>
    <?php
   

		 $link = mysqli_connect("localhost", "root", "", "web");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
		$sql = "SELECT * FROM `table`";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
		        while($row = mysqli_fetch_array($result)){

					echo '
					<tr>
      <td>'. $row['fname'] . '</td>
      <td>'. $row['mname'] . '</td>
      <td>'. $row['lname'] . '</td>
      <td>'. $row['dateofbirth'] . '</td>
      <td>'. $row['mobile'] . '</td>
      <td>'. $row['gender'] . '</td>
      <td>'. $row['email'] . '</td>
      <td>'. $row['Nationality'] . '</td>
      <td>'. $row['Livingin'] . '</td>
      <td>'. $row['feedback'] . '</td>
	  <td>'. $row['profession'] . '</td>
    </tr>

					';

        }
        }
	else{
        echo "THERE IS NO DATA";
   } 
        mysqli_free_result($result);

    }else{
    echo "ERROR";
}

echo " </table>";

$sql = "SELECT COUNT(`fname`) as 'Count', `profession` FROM `table` GROUP BY `profession`;";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
		echo '<strong> the three most frequent profession are (</strong>';
		        while($row = mysqli_fetch_array($result)){
					echo $row['profession'].' / ';
				}
				echo '<strong>)</strong>';
	}
}

    //mysqli_close($link);
	

		
	

    ?>
    
 
</div>
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
<script src="script.js"></script> 