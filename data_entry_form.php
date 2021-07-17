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
<h1>Data Entry Form</h1>
</div>


<form action="" method="post"  >

  <h2 class="center1">Personal Information</h2>
  
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
  <label for="residential_type">Type of Residential building </label><br>
  </div>

  <div class="center1" >
  <select name= "residential_type">
    <option value= "uhouse">house</option>
    <option value= "uappartment">appartment</option>
  </select><br><br>
  </div>

  
  
  
  <div class="center1">
  <label for="plot_no">Plot No#</label><br>
  </div>

  <div class="center1">
  <input type="number" name="plot_no" ><br><br>  
  </div>  
  
  <div class="center1">
  <label for="no_of_rooms">Number of Rooms</label><br>
  </div>

  <div class="center1">
  <input type="number" name="no_of_rooms" ><br><br>
  </div>

  <div class="center1">
  <label for="renovation_date">Renovation Date</label><br>
  </div>
  
  <div class="center1" >
  <input type="number"  name="renovation_date"><br>
  </div>


  <div class="center1">
  <label for="occupied">Occupied </label><br>
  </div>
  
  <div class="center1" >
  <input type="text"  name="occupied"><br>
  </div>

  <div class="center1">
  <label for="years_of_service">Years of Service</label><br>
  </div>
  
  <div class="center1" >
  <input type="number"  name="years_of_service"  min="2" ><br>
  </div>

 
  <div class="center1">
  <label for="city">City</label><br>
  </div>

  <div class="center1">
  <input type="text" name="city" ><br><br>
  </div>


  <div class="center1">
  <label for="street">Street</label><br>
  </div>

  <div class="center1">
  <input type="number" name="street" ><br><br>
  </div>

  <div class="center1">
  <label for="house_no">House No#</label><br>
  </div>

  <div class="center1">
  <input type="number" name="house_no" ><br><br>
  </div>


  <div class="center1">
  <label for="appartment_no">Appartment No#</label><br>
  </div>

  <div class="center1">
  <input type="number" name="appartment_no" ><br><br>
  </div>


  <div class="center1">
  <label for="no_of_appartments">No# of Appartments</label><br>
  </div>

  <div class="center1">
  <input type="number" name="no_of_appartments" ><br><br>
  </div>

  <div class="center1">
  <label for="scale">Scale</label><br>
  </div>

  <div class="center1">
  <input type="text" name="scale" ><br><br>
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
        $residential_type=$_POST['residential_type'];
        $plot_no=$_POST['plot_no'];
        $no_of_rooms=$_POST['no_of_rooms'];
        $renovation_date=$_POST['renovation_date'];
        $occupied=$_POST['occupied'];
        $years_of_service=$_POST['years_of_service'];
        $city=$_POST['city'];
        $street=$_POST['street'];
        $house_no=$_POST['house_no'];
        $appartment_no=$_POST['appartment_no'];
        $no_Of_Appartments=$_POST['no_of_appartments'];
        $scale=$_POST['scale'];
        $res_id = date("his");
        $cs_id = date("his");


        
        $sql_insert5="INSERT INTO BUILDINGS(PLOT_NUM,CITY,STREET,REN_DATE,OCCUPIED) VALUES ($plot_no,'$city',$street,'$renovation_date','$occupied')";
        $query_id5 = oci_parse($conn, $sql_insert5);
        $runselec5 = oci_execute($query_id5);
      
        $sql_insert3="INSERT INTO RESIDENT(RES_ID,PLOT_NUM) VALUES ($res_id,$plot_no)";
        $query_id3 = oci_parse($conn, $sql_insert3);
        $runselect3 = oci_execute($query_id3);


        if($house_no)
        {
          $sql_insert4="INSERT INTO HOUSES(RES_ID,HOUSE_ID) VALUES ($res_id,$house_no)";
          $query_id4 = oci_parse($conn, $sql_insert4);
          $runselec4 = oci_execute($query_id4);

          $sql_insert2="INSERT INTO CIVIL_SERVANTS(CS_ID,EMAIL,SCALE,YOS,HOUSE_ID) VALUES ($cs_id, '$uemail','$scale',$years_of_service,$house_no)";
          $query_id2 = oci_parse($conn, $sql_insert2);
          $runselect2 = oci_execute($query_id2);

        }
        else
        {
          $sql_insert4="INSERT INTO APPARTMENTS(APPARTMENT_ID,RES_ID,NO_OF_APPARTMENTS) VALUES ($appartment_no, $res_id,$no_Of_Appartments)";
          $query_id4 = oci_parse($conn, $sql_insert4);
          $runselec4 = oci_execute($query_id4);

          $sql_insert2="INSERT INTO CIVIL_SERVANTS(CS_ID,EMAIL,SCALE,YOS,APPARTMENT_ID) VALUES ($cs_id, '$uemail','$scale',$years_of_service,$appartment_no)";
          $query_id2 = oci_parse($conn, $sql_insert2);
          $runselect2 = oci_execute($query_id2);

        }
        

         




        //


        if( $runselect2 && $runselect3 && $runselec5)
        {
            echo nl2br("Insertion Successful.\n ");
        }
        else if( $runselect2 && $runselect4 && $runselec5)
        {
          echo nl2br("Insertion Successful.\n ");
        }
      }



    
        
    ?>

    


</body>
</html>
