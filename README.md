# Phpmyadmin Solution 
 plugin interface proble on Ubuntu 18.10 
## Getting Started 
 
 This is my first project ! 

 So, I didn't want to do an empty trial.

 I found a solution that a mistake by the phpmyadmin.

### Installing
  if you get this error on phpmyadmin page:
  '''
  ./libraries/plugin_interface.lib.php #551
  '''
  then,
  You look up the error.log from the apache2 and saw the paranthesis error that:
  '''
  /var/log/apache2/error.log 
  '''

### Solution
The above,You can access the function that in the part of the file from.
replace the function to yours. 

Thats it.
 
   
