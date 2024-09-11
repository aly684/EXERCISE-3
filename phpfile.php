<?php

// a. file_get_contents
$contents = file_get_contents('myphpfile.txt');
echo "Contents of example.txt: $contents\n";

// b. file_put_contents()
$contents = 'Hello, World!';
file_put_contents('myphpfile2.txt', $contents);
echo "Wrote contents to example.txt\n";

// c. file_exists()
if (file_exists('example.txt')) {
    echo "myphpfile.txt exists\n";
} else {
    echo "example.txt does not exist\n";
}

// d. file()
$fp = fopen('myphpfile2.txt', 'r');
if ($fp) {
    while (!feof($fp)) {
        echo fgets($fp);
    }
    fclose($fp);
} else {
    echo "Error opening file\n";
}

?>