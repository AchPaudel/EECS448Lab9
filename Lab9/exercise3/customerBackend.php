<html>
<head>
</head>
<body>
</body>
<h1>Receipt</h1>


<?php
  echo "Thank your for your purchase from The Epic Gamers Only Shop, <b>".$_POST["username"]."</b>.<br>";
  echo "Your password is: <b>".$_POST["password"]."</b>.<br><br><br><br>";
  echo "Here is a copy of your receipt:<br><br>";
  echo "<table style=\"text-align:center\"><tbody>";

  echo "<tr><td></td><td>Quantity</td><td>Cost/Item</td><td>Subtotal</td></tr>";
  echo "<tr><td style=\"text-align:left\">Call of Duty</td><td>".$_POST["cod"]."</td><td>$60</td><td>$".$_POST["cod"]*60.00."</td>";
  echo "<tr><td style=\"text-align:left\">Rocket League</td><td>".$_POST["rl"]."</td><td>$20</td><td>$".$_POST["rl"]*20.00."</td>";
  echo "<tr><td style=\"text-align:left\">NBA 2k21</td><td>".$_POST["nba"]."</td><td>$69</td><td>$".$_POST["nba"]*69.00."</td><tr></tr><tr></tr><tr></tr>";

  $s = 0;
  if ($_POST["shipping"] == "5"){
      $s = 5;
      echo "<tr><td style=\"text-align:left\">Shipping</td><td colspan='2' style=\"text-align:right\">3-Day</td><td>$".$s."</td>";
  }

  if ($_POST["shipping"] == "50"){
      $s = 50;
      echo "<tr><td style=\"text-align:left\">Shipping</td><td colspan='2' style=\"text-align:right\">Overnight</td><td>$".$s."</td>";
  }


  echo "<tr><td colspan='3' style=\"text-align:left\">Total Cost</td><td>$".(($_POST["cod"]*60)+($_POST["rl"]*20)+($_POST["nba"]*69)+$s)."</td>";
  echo "</tbody></table>";

?>

</html>
