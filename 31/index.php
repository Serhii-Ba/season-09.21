<?php

// email
//$s = $_POST['email'];
$s = 'user@ex;DROP DATABASE test; --  ample.com';


/*
if (strlen($s) > 0) {
    echo 'not empty' . "\n";
    // не пустая строка

    if (strpos($s, '@') > 0 && strpos($s, '.') > 0) {
        echo '@ & dot, exist' . "\n";

        //... save user data into database
    }
}
*/

//if (filter_var($s, FILTER_VALIDATE_EMAIL)) {
//    echo 'valid data' . "\n";
//}

//if (false == filter_var($s, FILTER_VALIDATE_EMAIL)) {
//    echo 'invalid data' . "\n";
//}


//$s = '&';
//echo '& = ' . htmlspecialchars($s);


$s = '<strong>Helllo!</strong>
<script>
  alert(1);
</script>';

echo $s . "\n\n\n";
echo strip_tags($s) . "\n\n\n";
echo htmlspecialchars($s) . "\n\n\n";
