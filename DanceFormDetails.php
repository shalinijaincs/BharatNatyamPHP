<HTML>
<HEAD>
    <TITLE>First PHP Project</TITLE>
    <?php
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con,"dance_project");

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $std = $_POST["std"];
        $divi = $_POST["divi"];
        $dob = $_POST["dob"];
        $addr = $_POST["addr"];
        $occu = $_POST["occu"];
        $mob = $_POST["mob"];
        $adv = $_POST["adv"];
        $bal = $_POST["bal"];
        $mode = $_POST["mode"];

        /**echo "$fname,$lname,$std,$divi,$dob,$addr,$occu,$mob,$adv,$bal,$mode";**/

        $sqlquery="select * from danceformdetails";
        /**echo $sqlquery;**/

        $sqlquery="insert into danceformdetails (`fname`,`lname`,`std`,`divi`,`dob`,`addr`,`occu`,`mob`,`adv`,`bal`,`mode`,`logintime`) values ('$fname','$lname','$std','$divi','$dob','$addr','$occu','$mob','$adv','$bal','$mode',current_timestamp())";
        /**echo $sqlquery;**/

        $result=mysqli_query($con,$sqlquery);
        
        echo '<h1>Thank you for registering in Dance Academy.....</h1><br>';
        echo '<href = http://localhost/Test/DanceProjectUsingPHP/ShowAllRecords.php>';
        echo '<script type="text/javascript">
        window.alert("Your Record has been updated."); 
        </script>';  
        
    ?>
</HEAD>
<BODY>
        
</BODY>
</HTML>
