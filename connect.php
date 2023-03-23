<?php
$connection = mysqli_connect("localhost", "root","");
$db = mysqli_select_db($connection, 'subsub');

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $ic = $_POST['ic'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $fName = $_POST['fName'];
    $fIc = $_POST['fIc'];
    $fPhone = $_POST['fPhone'];
    $fAddress = $_POST['fAddress'];
    $fOccupation = $_POST['fOccupation'];
    $fSalary = $_POST['fSalary'];
    $fOfficeAddress = $_POST['fOfficeAddress'];

    $query = "INSERT INTO `testest` (`name`, `ic`, `phone`,`address`) VALUES ('$name', '$ic', '$phone','$address')";

    $query = "INSERT INTO `father` (`fName`, `fIc`, `fPhone`,`fAddress`, `fOccupation`, `fSalary`, `fOfficeAddress` ) VALUES ('$name', '$ic', '$phone','$address', '$occupation', '$salary', '$officeaddress')";

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