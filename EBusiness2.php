<?php
session_start();
$fullNameValue ="";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number 
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
/*
 * Allocate the mobile number session variable to a text box
 */
?>
<!DOCTYPE html>
        <html>
            <head>
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
</style>
                <title>EBusiness2</title>
            </head>
            
            <body>
            <center>
                <div class="form">
                            <style>
            div{
  width: 600px;
  padding: 10px;
  border: 5px solid purple;
  margin: 0;
  }
  </style>
                    <form name="Details" method="post" action="EBusiness3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Enter your details  below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                                </tr>
                                <tr>
                                    <td>Phone number</td>
                                    <td><input type="tel" id="txtNum" name="txtNum" value="" minlength="10" maxlength="10" required/></td>
                                     
                                </tr>
                                <tr>
                                    <td>Pin</td>
                                    <td><input type="password" id="txtPassword" name="txtPassword" value="" minlength="4" maxlength ="4" required/></td>
                                </tr>
                                <tr>
                                    <td><input type ="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/>
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" name="btncontinue" id="btnContinue" onclick="" value="Continue"/>
                            </center>
                </div>
            </center>
                    </form>
            </body>
    </html>