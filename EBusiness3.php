<!DOCTYPE html>
<html>
  
  
<body>
<center>
    <div>
<center>
    <h1><b><u>Your Receipt</u></b></h1>
    <br />
    <br />
   
      <style>
           body{
              background-color: gray
          }
div {
  border: 1px solid black;
  background-color: lightpink;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}

           div{
  width: 600px;
  padding: 10px;
  border: 5px solid purple;
  margin: 0;
  }
</style>
                
    
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();
$totalValue = $_POST['txtTotal'];      
$fullNameValue = $_POST['txtName'];
$phoneNumber=$_POST['txtNum'];
echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "Phone Number : ".$phoneNumber.".";
echo "<br></br>";
echo "The total value is $".$totalValue.".";


?>
</center>
</center>
        </div>
    
    <form method="get" action="index.php" >  <button type="submit" class="button button" > Return to Homepage</button>  </form>
             <br>
</body>
</html>

