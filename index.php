<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <table>
  
  <center><img  src ="images\portada.png" border="0"  width = "700" height =" 700 "  ></center>
  
  <img align="left" src="images\stb.png" border = "0" width="250" height = "350" > 
   <img align="right" src="images\stb.png" border = "0" width="250" height = "350" > 
       <tr>
      <th> empleado</th>
      <th> first_name</th>
       <th> last_name</th>
       <th> email</th>
       </tr>
   <?php
 $servername = "us-cdbr-iron-east-03.cleardb.net";
  
$username = "b74ba3320e82ec";
  
$password = "2d194843";
  
$dbname = "ad_bb6ddb2f34daf52";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['codigo_servicio']?></td>
      <td><?php echo $row['descripcion_servicio']?></td>
      <td><?php echo $row['nombre_servicio']?></td>
       <td><?php echo $row['imagen_servicio']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 
 <center><img  src ="images\telus.png" border="0"  width = "500" height =" 400 "  ></center>
 </body>
 </html><!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <table>
  
  <center><img  src ="images\portada.png" border="0"  width = "700" height =" 700 "  ></center>
  
  <img align="left" src="images\stb.png" border = "0" width="250" height = "350" > 
   <img align="right" src="images\stb.png" border = "0" width="250" height = "350" > 
       <tr>
      <th> empleado</th>
      <th> first_name</th>
       <th> last_name</th>
       <th> email</th>
       </tr>
   <?php
 $servername = "us-cdbr-iron-east-03.cleardb.net";
  
$username = "b74ba3320e82ec";
  
$password = "2d194843";
  
$dbname = "ad_bb6ddb2f34daf52";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['codigo_servicio']?></td>
      <td><?php echo $row['descripcion_servicio']?></td>
      <td><?php echo $row['nombre_servicio']?></td>
       <td><?php echo $row['imagen_servicio']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 
 <center><img  src ="images\telus.png" border="0"  width = "500" height =" 400 "  ></center>
 </body>
 </html>
