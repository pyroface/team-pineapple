<!--Leos test fil-->

<!DOCTYPE html>
<html>
  <head>
   <title>Table från database</title>
   <style>

    table {
     border-collapse: collapse;
     width: 100%;
     color: #2c3e50;
     font-family: arial;
     font-size: 20px;
     text-align: left;

      }

    th {
     background-color: #2c3e50;
     color: white;
      }

    tr:nth-child(even) {background-color: #f2f2f2;}

   </style>
  </head>
  <body>
  <table>
    <tr>
      <th>Id</th> 
      <th>Username</th>
      <th>Score</th> 

    </tr>
     <?php
        $conn = mysqli_connect("localhost", "root", "", "catchcoins");
        // Check connection
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT ID, Username, Score FROM accounts ORDER BY Score DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . 
            $row["ID"]. "</td><td>" . 
            $row["Username"] . "</td><td>" .
            $row["Score"] . "</td></tr>";
          }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
      ?>
    </table>



  </body>
</html>







