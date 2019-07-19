<?php

/*
 This script delays before returning the contents of a file.

 Usage:

        delay_appcast.php

*/

    $delay = 25; // integer seconds to delay

    $target = 'updates/3.8.0/appcast-v2.rss'; // path without "https://tunnelblick.net/" prefix


    // Delay
    $more = $delay;
    while (  $more != 0) {
        $more = sleep($more);
    }

    header('Content-Type: application/rss+xml');

    $www_root = $_SERVER["DOCUMENT_ROOT"];

    $result = readfile("$www_root/$target");
    if (  $result === false  ) {
        echo "readfile() failed.";
    }

    exit;

?>


