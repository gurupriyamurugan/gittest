<?php
 
$myfile = fopen("fop.txt", "r") or die("Unable to open file!");
$table = '<table>';
while(!feof($myfile)) {
  $row = '<tr>';
  for($i=1;$i<=4;$i++){
    $row .= '<td>' . trim(fgets($myfile)) . '</td>';

  }
  $table .=$row. '</tr>';
  }
  $table .= '</table>';
  echo $table;
  fclose($myfile);
?>  

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head> 
  <body>
    <div class="container my-5"> 
      <form method ="post">
  <div class="form-group">
    <label>Ename</label>
    <input type="text" class="form-control"placeholder="Enter Your Name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"placeholder="Enter Your email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control"placeholder="Enter Your mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"placeholder="Enter Your Password" name="password" autocomplete="off">
  </div>
  
  
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

      </body>
</html>
