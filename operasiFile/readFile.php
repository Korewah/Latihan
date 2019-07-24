<?php
$filename = "temp.txt";
$i = 1;
	if (file_exists($filename)) {
	    echo "The file $filename exists";
	    $file = fopen($filename, "w+");
	    while ( $i <= 10) {
	    	# code...
	    fwrite($file,"hallo saya Maul \r\n");
	    $i++;
	    }

	}
	else {
	    echo "The file $filename does not exist";
	    fopen($filename, "w");
	    echo "File Telah Dibuat";

	}
?>