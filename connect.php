<?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection, 'subsub');

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $ic = $_POST['ic'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $fname = $_POST['fName'];
    $fic = $_POST['fIc'];
    $fphone = $_POST['fPhone'];
    $faddress = $_POST['fAddress'];
    $foccupation = $_POST['fOccupation'];
    $fsalary = $_POST['fSalary'];
    $fofficeaddress = $_POST['fOfficeAddress'];

    $query = "INSERT INTO `testest` (`name`, `ic`, `phone`,`address`, `fName`, `fIc`, `fPhone`,`fAddress`, `fOccupation`, `fSalary`, `fOfficeAddress`) VALUES ('$name', '$ic', '$phone','$address', '$fname', '$fic', '$fphone','$faddress', '$foccupation', '$fsalary', '$fofficeaddress')";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script  type="text/javascript"> alert ("Data Saved") </script>';
    }
    else
    {
        echo '<script  type="text/javascript"> alert ("Data Not Saved") </script>';
    }

}
?>
