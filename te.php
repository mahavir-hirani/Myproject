 <?php

 $results = array(); 
 exec('path_to_shell_script pdf-sample.protected.pdf', $results);
  print_r($results);
        die;