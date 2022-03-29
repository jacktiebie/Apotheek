<?php  
// PayPal configuration  
define('PAYPAL_ID', 'jacktiebie45@gmail.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE  
 
define('CONTINUE_SHOPPING_URL', 'http://localhost/apotheek/medicijnen-winkel.php');  
define('PAYPAL_RETURN_URL', 'http://localhost/apotheek/index.php');  
define('PAYPAL_CANCEL_URL', 'http://localhost/apotheek/index.php');  
define('PAYPAL_NOTIFY_URL', 'http://localhost/apotheek/index.php');  
define('PAYPAL_CURRENCY', 'EUR');  
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'apotheekschut');  


// Change not required  
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");