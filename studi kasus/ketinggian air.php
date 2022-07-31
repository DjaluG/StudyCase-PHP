<!DOCTYPE html>
<html lang="en">
<head>
    <title>Banjir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="Banjir">
  <?php
    $air = 10;
    echo "Ketinggian air : $air Meter <br>";
    
    
    if ($air >= 10){
    echo "Banjir";
    }elseif ($air >= 5){
        echo "Rawan banjir";
    }elseif ($air >= 3){
        echo "Bahaya";
    }elseif ($air >= 1){
        echo "Siaga";
    } else {
        echo "Aman";
    }
?>
</div>
</body>
</html>
