<?php

echo "Hi.";

$ch = curl_init('http://twitter.com/theatlantic');
$html = curl_exec($ch);
echo $html;

 ?>

 <script type="text/javascript">
    $('document').ready(function() {
        $('#content').load('curl.php #main');
    });
</script >
