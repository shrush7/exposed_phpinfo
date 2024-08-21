<!-- phpinfo.php -->
<?php

function displayPHPVersion() {
    echo '<h2>PHP Version Information</h2>';
    echo '<p>Current PHP version: ' . phpversion() . '</p>';
    echo '<p>PHP loaded configuration file (php.ini): ' . php_ini_loaded_file() . '</p>';
}

// Call the function to display PHP version information
displayPHPVersion();

// Output the rest of the phpinfo()
phpinfo();
?>
