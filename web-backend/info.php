<?php 

$path_parts = pathinfo('/uploads/thing.PHP');

echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n"; // since PHP 5.2.0


phpinfo(); 
echo sys_get_temp_dir();
?>