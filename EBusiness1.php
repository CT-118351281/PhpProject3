<?php
session_start();
$totalValue="";
$_Session['txtTotal']= $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
    <head>
            <style>
div {
  border: 1px solid black;
  background-color: lightpink;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
</style>
        <meta charset="utf-8"/>
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>       
    </head>
    
      <style>
          body{
              background-color: gray
          }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: lightgrey;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="companyhomepage.html">Our Company</a></li>
  <li><a href="index.html">My CV</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">My Interests</a>
    <div class="dropdown-content">
        <a href="tiltedpage_scroll_demo.html">Interests</a>
       <a href="sports.html">Sports</a>
      <a href="travel.html">Travel</a>
      <a href="consulting.html">Consulting Services</a>
      <li><a href="EBusiness1.php">Shop Products</a></li>
   </div>
  </li>
</ul>
    <body>
    <center><div class="form">
                    <style>
            div{
  width: 600px;
  padding: 10px;
  border: 5px solid purple;
  margin: 0;
  }
  </style>
            <form name="intCalc" method="post" action="EBusiness2.php">
                <h1><b>CT Consultancy</b></h1>
            <hr/>
            <center>
                        <table cellspacing="10">
                        <tr>
                            <td><h2><b><u>Our Products</u></b></h2></td>
                        </tr>
                        <tr>
                            <td><b>BlockChain</b></td>
                            <td><input type="radio" id="BlockChain" name="rdoGroup" value="1000"/></td>
                        </tr>
                        <tr>
                            <td><b>AutonomousThings</b></td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="970"/></td>
                        </tr>
                        <tr>
                            <td><b>ImmersiveExperience</b></td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="2500"/></td>
                        </tr>
                        
                        </table>
            </center>
            <br />
            <center>
                <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td><b>Amount</b></td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td><input type="text" id="txtSubTot" name="txtSub" readonly/></td>
                    </tr>
                    <tr>
                        <td>-Discount @10%</td>
                        <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                    </tr>
                    <tr>
                        <td>+VAT @20%</td>
                        <td><input type="text" id="txtVAT" name="txtVAT" readonly/></td>
                    </tr>
                    <tr>
                        <td>Total Cost</td>
                        <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                    </tr>
                </table>
            </center>
            <br/>
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Add to Shopping Cart"/>
            </center>
            </form>
        </div>
    </center>
        <script type="text/javascript">
            function calcSub(){
                //Assigning variables to the values
                var subAmount= parseFloat(document.getElementById('txtSubTot').value);
                var BlockChain = parseFloat(document.getElementById('BlockChain').value);
                var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
            
            //If radio buttons are clicked values are assigned
           if (document.getElementById('BlockChain').checked){
               document.intCalc.txtSubTot.value = BlockChain;
               subAmount= BlockChain;
               calculation(subAmount);
           }
           else if (document.getElementById('AutonomousThings').checked){
               document.intCalc.txtSubTot.value = AutonomousThings;
               subAmount= AutonomousThings;
               calculation(subAmount);
           }
            else if (document.getElementById('ImmersiveExperience').checked){
               document.intCalc.txtSubTot.value = ImmersiveExperience;
               subAmount= ImmersiveExperience;
               calculation(subAmount);
           }
       }
        //Function for calculating values 
        function calculation(parmSTotal){
            var subTotal = parseFloat(parmSTotal);
            var discCalc = parseFloat(subTotal*.10);
            var vatCalc = parseFloat(subTotal*.20);
            var total = parseFloat(subTotal - discCalc + vatCalc);
            
            //Instering them into the correct fields
            document.intCalc.txtDisc.value = discCalc;
             document.intCalc.txtVAT.value = vatCalc;
              document.intCalc.txtTotal.value = total;
          }
          function AmountClear(){
              document.getElementById("txtSubTot").value = "";
               document.getElementById("txtDisc").value = "";
                document.getElementById("txtVAT").value = "";
                 document.getElementById("txtTotal").value = "";
                        
          }
          
            
     </script> 
     <br />
     <br />
     <center>
         <form method="get" action="consulting.html" >  <button type="submit" class="button button" ><font size="4">Learn About Our Products Here</button>  </form>
             <br>
     </center>
    </body>
    
</html>

