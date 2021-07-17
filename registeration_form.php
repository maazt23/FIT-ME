<!DOCTYPE html>
<html>

<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
          background-image: url('data_input.jpeg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
    ::-webkit-scrollbar {
      width: 10px;
    }


    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
    
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }

    table {
      border: 1px solid black;
      border-collapse: collapse;

     
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    th, td {
      text-align: left;
      padding: 16px;
    }
    tr:nth-child(even) {
    background-color: BlanchedAlmond;
    }
    tr:nth-child(odd) {
    background-color: BurlyWood;
    }
      

    table.center {
      margin-left: auto; 
      margin-right: auto;
    }

    input[type=text ], select {
      margin-left: auto; 
      margin-right: auto;
      width: 30%;
      text-align: center; 
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=number ], select {
      margin-left: auto; 
      margin-right: auto;
      width: 30%;
      text-align: center; 
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=password], select {
      width: 30%;
      text-align: center; 
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    
    }

    input[type=submit] {
      width: 30%;
      text-align: center;  
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .center1 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 35px;
    }

    

</style>
</head>
<body>

<b>

<div class="center1">
<h1>ESTATE OFFICE DATABASE APPLICATION</h1>
</div>



<div class="center1">
<h1>Registeration Form</h1>
</div>


<form action="login.html" method="post"  >

  <h2 class="center1">Account Credentials </h2>
  
  <div class="center1">
  <label for="servantName">Name</label><br>
  </div>

  <div class="center1">
  <input type="text" id="servantName" name="servantName"  ><br> 
  </div>


  <div class="center1">
  <label for="uemail">Email</label><br>
  </div>

  <div class="center1">
  <input type="text" id="uemail" name="uemail" ><br> 
  </div>
  

  <div class="center1">
  <label for="pwd">Password</label><br>
  </div>

  <div class="center1">
  <input type="password" id="pwd" name="pwd" ><br> 
  </div>
  
  
  
  
  
  

  <br><br>  
  <div class="center1"><input type="submit" name="button" value="Submit"></div>

  </b>
</form> 

<?php
    $db_sid = 
    "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = Talha)(PORT = 1521))
    (CONNECT_DATA =
    (SERVER = DEDICATED)
    (SERVICE_NAME = XE)
    )
    )";           // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
    
    $db_user = "system";   // Oracle username e.g "scott"
    $db_pass = "1234";    // Password for user e.g "1234"
    $conn = oci_connect($db_user,$db_pass,$db_sid);

    if($conn) 
        { 
          //echo  nl2br("Connection Successful.\n ");
        } 
    else 
        { die('Could not connect to Oracle: '); } 

      

    if(isset($_POST['button']))
    {
      
        $servant_name=$_POST['servantName'];
        $uemail=$_POST['uemail'];
        $pwd=$_POST['pwd'];

        $sql_insert1="INSERT INTO PERSON(PERSON_NAME,EMAIL,PWD) VALUES ('$servant_name','$uemail' ,'$pwd')";
        $query_id1 = oci_parse($conn, $sql_insert1);
        $runselect1 = oci_execute($query_id1);

        if($runselect1)
        {
            echo nl2br("Insertion Successful.\n ");
        }
        
      }



    
        
    ?>

    


</body>
</html>
