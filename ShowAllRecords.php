<html>
    <head>
        <title>All Records</title>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $databasename = "dance_project";

            $con = new mysqli($servername,$username,$password,$databasename);

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $sqlquery="select * from danceformdetails";
            
            $result = $con->query($sqlquery);
            
            echo '<h1><u><center>Details of All Students</center></u></h1><br>';

            echo '<table border="1" align="center">
            <tr>
                    <th>Record No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Standard</th>
                    <th>Division</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>Occupation of Parents</th>
                    <th>Mobile Number</th>
                    <th>Advance</th>
                    <th>Balance</th>
                    <th>Payment Mode</th>
            </tr>';

            if ($result->num_rows > 0) 
            {

                // OUTPUT DATA OF EACH ROW
                while($row = $result->fetch_assoc())
                {
                    /**echo "Record No: ".$row["reccnt"]." - 
                    First Name: ".$row["fname"]." | 
                    Last Name: ".$row["lname"]."  | 
                    Standard: ".$row["std"]. "    |
                    Division: ".$row["divi"]."  |
                    Date of Birth: ".$row["dob"]."  |
                    Address: ".$row["addr"]."  |
                    Occupation: ".$row["occu"]."  |
                    Mobile: ".$row["mob"]."  |
                    Advance: ".$row["adv"]."  |
                    Balance: ".$row["bal"]."  | 
                    Mode: ".$row["mode"]."<br>";**/

                    echo '<tr  align="center">
                    <td>'.$row["reccnt"].'</td>
                    <td>'.$row["fname"].'</td>
                    <td>'.$row["lname"].'</td>
                    <td>'.$row["std"].'</td>
                    <td>'.$row["divi"].'</td>
                    <td>'.$row["dob"].'</td>
                    <td>'.$row["addr"].'</td>
                    <td>'.$row["occu"].'</td>
                    <td>'.$row["mob"].'</td>
                    <td>'.$row["adv"].'</td>
                    <td>'.$row["bal"].'</td>
                    <td>'.$row["mode"].'</td>
                    </tr>';
                }
            } 
            else {
                echo "0 results";
            }
            
            $con->close();
        ?>
        </head>
        <body>
        </body>
</html>
