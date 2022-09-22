<?php 
   session_start();
   include "connection.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']))  
$res = mysqli_query($connect, $sql);
?>
<?php
if(!isset($_SESSION['user'])){
    die("You are not logged in");
}
    include 'connection.php';
    if(isset($_POST['Submit']))
    {
    $id = $_POST['customerReference'];
    $validated = 1;
    $query = "UPDATE `customer` SET `validated`= ".$validated." WHERE `customerID` = ".$id."";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    }
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<br>
<h2 style="color:brown;">Welcome!</h2>
<h4 style="color:blue;">Please upload a file.</h4>
<form action="#" method="POST">
        <label for="customer">Choose a customer:</label>
  <select id="customer" name="customerReference">
    <?php   
        $sqlFetchCustomer = "SELECT customer_name, customerID FROM customer";
        $resFetchCustomer = mysqli_query($connect, $sqlFetchCustomer);
        while($rows = mysqli_fetch_assoc($resFetchCustomer))
            {
                echo "<option value = '".$rows['customerID']."'> ".$rows['customer_name']." </option>";
            }
    ?>
  </select>
        <label for="myfile">Select a file:</label>
        <input type="file" id="myfile" 
            name="myfile" multiple="multiple" required/>
<input type="submit" name="Submit">
    </form>
</body>
</html>