<!DOCTYPE html>

<html>
    
    <style>
    body{
          background-image: url('data_input.jpeg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }

    /* Handle on hover */
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

    input[type=text], select {
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
    
<body>

<?php  // creating a database connection 

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
      echo  nl2br("Connection Successful.\n ");
    } 
else 
    { 
        die('Could not connect to Oracle: '); 
    } 


        $sql_ret1="SELECT civil_servants.house_id ". 
        "  FROM CIVIL_SERVANTS ".
        "  INNER JOIN Person ON civil_servants.email=person.email".
        "  INNER JOIN Houses ON civil_servants.house_id=houses.house_id";
        $stid1 = oci_parse($conn, $sql_ret1);
        oci_execute($stid1);


        $sql_ret2="SELECT civil_servants.appartment_id ". 
        "  FROM CIVIL_SERVANTS ".
        "  INNER JOIN Person ON civil_servants.email=person.email".
        "  INNER JOIN Houses ON civil_servants.house_id=houses.house_id";
        $stid2 = oci_parse($conn, $sql_ret2);
        oci_execute($stid2);

        if($stid1)
        {
          $sql_ret3="SELECT civil_servants.CS_ID,civil_servants.EMAIL,civil_servants.SCALE,civil_servants.yos,civil_servants.house_id,person.person_name,houses.res_id ". 
          "  FROM CIVIL_SERVANTS ".
          "  INNER JOIN Person ON civil_servants.email=person.email".
          "  INNER JOIN Houses ON civil_servants.house_id=houses.house_id";
          $stid3 = oci_parse($conn, $sql_ret3);
          oci_execute($stid3);
      
          echo "<h1>Display Data</h1>\n";
          echo "<table border='1'>\n";
          echo "<tr>";
          echo "<th>CS ID</th>";
          echo "<th>EMAIL</th>";
          echo "<th>SCALE</th>";
          echo "<th>Years Of Service</th>";
          echo "<th>House ID</th>";
          echo "<th> Civil Servant Name</th>";
          echo "<th>RESIDENTIAL ID</th>";
          echo "</tr>";
          while ($row = oci_fetch_array($stid3, OCI_ASSOC+OCI_RETURN_NULLS)) {
          echo "<tr>\n";
          foreach ($row as $item) {
              echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
          }
          echo "</tr>\n";
          }
          echo "</table>\n";

        }
        else if($stid2)
        {  
          $sql_ret3="SELECT civil_servants.CS_ID,civil_servants.EMAIL,civil_servants.SCALE,civil_servants.yos,civil_servants.appartment_id,person.person_name,houses.res_id ". 
          "  FROM CIVIL_SERVANTS ".
          "  INNER JOIN Person ON civil_servants.email=person.email".
          "  INNER JOIN Houses ON civil_servants.house_id=houses.house_id";
          $stid3 = oci_parse($conn, $sql_ret3);
          oci_execute($stid3);
      
          echo "<h1>Display Data</h1>\n";
          echo "<table border='1'>\n";
          echo "<tr>";
          echo "<th>CS ID</th>";
          echo "<th>EMAIL</th>";
          echo "<th>SCALE</th>";
          echo "<th>Years Of Service</th>";
          echo "<th>Appartment ID</th>";
          echo "<th> Civil Servant Name</th>";
          echo "<th>RESIDENTIAL ID</th>";
          echo "</tr>";
          while ($row = oci_fetch_array($stid3, OCI_ASSOC+OCI_RETURN_NULLS)) {
          echo "<tr>\n";
          foreach ($row as $item) {
              echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
          }
          echo "</tr>\n";
          }
          echo "</table>\n"; 

        }
   
        
        
        
        echo"<br>"; 
        echo "<br>";

        
    

      
?>
    





</body>
</html>