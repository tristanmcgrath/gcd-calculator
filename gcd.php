<?php
$n1 = $_POST['first-number'];
$n2 = $_POST['second-number'];

function gcd($x, $y)
{
  $x = abs($x);
  $y = abs($y);

  if($x + $y == 0) {
     return "0";
  } else {
      while($x > 0)
      {
        $z = $x;
        $x = $y % $x;
        $y = $z;
      }
      return $z;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.min.css">
  <link href="https://fonts.googleapis.com/css?family=Gudea:400,700|Open+Sans:300,300i,400,600,700|Satisfy" rel="stylesheet">
</head>
<body>
  <section id="contact-form">
    <p>GCD Calculator</p>
    <h1 id="form-header">The GCD of <strong><?php echo $n1; ?></strong> and <strong><?php echo $n2; ?></strong> is:</h1>
    <p style="font-size:106px;color:#fff;font-weight:600;margin-top:50px;"><?php echo gcd($n1,$n2); ?></p>
    <div class="form-container">
      <a href="http://www.hicol.in/tristan/GCD"><div class=button>Try Again?</div></a>
    </div>
  </section>
</body>
</html>
