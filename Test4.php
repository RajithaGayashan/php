<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Numbers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
        $val1=10;
        $val2=100;
        
    ?>
    Basic calculation:(((10+20+$val1)+$val2)/20-50)=
     
    <?php 
             echo (((10+20+$val1)+$val2)/20-50);
    ?>
    <br>
    <h1>Calculation</h1><br>
    square root : <?php echo sqrt(100); ?><br>
    Exponention : <?php echo pow(2,4); ?><br>
    Absclote value: <?php echo abs(20-23); ?><br>
    Modulo : <?php echo fmod(10,6); ?><br>
    Random: <?php echo rand(); ?><br>
    Random: <?php echo rand(10,1000); ?><br>
    
</body>
</html>