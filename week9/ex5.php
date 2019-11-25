<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Order Confirmation</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="ex5.css" type="text/css"/>
    </head>

    <body>
      <form onsubmit="return validate();" action="http://webprojects.eecs.qmul.ac.uk/jhm32/HTML/labs/week9/ex5.php" method="post">
        <fieldset>
          <legend id= legend>ORDER DETAILS</legend>
          <div class="container">
          <div class="container2">
<br>
           <table>
             <tr>
               <th id="tabletop">Type</th>
               <th id="tabletop">Price(£)</th>
             </tr>
             <tr>
               <td>Four 100-watt light bulbs</td>

               <td><?php if(isset($_POST["check1"])){
                 $bulb = 2.39;
                 echo "2.39";
                 $total= $total + $bulb;
               } ?></td>
             </tr>
             <tr>
               <td>Eight 100-watt light bulbs</td>
               <td><?php
               if(isset($_POST["check2"])){
                 $bulb = 4.29;
                 $total= $total + $bulb;
                 echo "4.29";
               }
                ?></td>
             </tr>
             <tr>
               <td>Four 100-watt long-life light bulbs</td>
               <td><?php
               if(isset($_POST["check3"])){
                 $bulb = 3.95;
                 $total= $total + $bulb;
                 echo "3.95";
               }
                ?></td>
             </tr>
             <tr>
               <td>Eight 100-watt long-life light bulbs</td>
               <td><?php
               if(isset($_POST["check4"])){
                 $bulb = 7.49;
                 $total= $total + $bulb;
                 echo "7.49";
               }
                ?></td>
             </tr>
             <tr>
               <td>Batteries</td>

               <td>

               <?php
                 $batterynumber = $_POST["batteries"];
                 $battery= $batterynumber * 10.42;
                 echo $battery;
               ?>
             </td>
           </tr>
           <tr>
             <td>Total</td>
             <td>
               <?php
               $total = $total + $battery;
               echo $total;
               ?>
             </td>
           </tr>
           <tr>
             <td>Total Plus VAT</td>
             <td>
              <?php
               $total= $total + $battery;
               $newtotal= ($total * 20)/100;
               $newtotal= $newtotal + $total;
               echo $newtotal
               ?>
             </td>

             </tr>
           </table>
           <p id="cardcss">
             <?php

             if(isset($_POST["card1"])){
               $card = "Visa";
               echo "CHOSEN CARD: ";
               echo $card;
             }
             else if(isset($_POST["card2"])){
               $card = "Master Card";
                 echo "CHOSEN CARD: ";
               echo $card;
             }
             else if(isset($_POST["card3"])){
               $card = "American Express";
                 echo "CHOSEN CARD: ";
               echo $card;
             }
              ?>
           </p>

          </div>
          </div>
        </fieldset>
      </form>


  </body>
</html>
