<?php 

  $plaintext_password = readline('Enter a Password: ');  
  
 
  $hash = password_hash($plaintext_password,  
          PASSWORD_DEFAULT); 
  
   echo "Generated encryption: ".$hash; 
?>
