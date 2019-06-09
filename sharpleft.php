
<?php 
$m1e =  21;
$m1a = 16;
$m1b  = 20;

$m2e = 26;	
$m2a = 13;	
$m2b = 19;
        system("GPIO.output(Motor1A,GPIO.LOW)");
        system("GPIO.output(Motor1B,GPIO.HIGH)");
        system("GPIO.output(Motor2A,GPIO.LOW)");
        system("GPIO.output(Motor2B,GPIO.HIGH)");
        
        include 'index.php';
        
  




?>


