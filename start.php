
<?php 
$m1e =  21;
$m1a = 16;
$m1b  = 20;

$m2e = 26;	
$m2a = 13;	
$m2b = 19;
        system("GPIO.setmode(GPIO.BCM)")  ;                     
        system("GPIO.setup(Motor1A,GPIO.OUT)");  
        system("GPIO.setup(Motor1B,GPIO.OUT)");
        system("GPIO.setup(Motor1E,GPIO.OUT)");
        system("GPIO.setup(Motor2A,GPIO.OUT)");  
        system("GPIO.setup(Motor2B,GPIO.OUT)");
        system("GPIO.setup(Motor2E,GPIO.OUT)");
        system("GPIO.output(Motor1E,GPIO.HIGH)");
        system("GPIO.output(Motor2E,GPIO.HIGH)");
        
        include 'index.php';
        
  




?>


