<?php

  function curl($url) {
    $options = Array(
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_FOLLOWLOCATION => TRUE,
      CURLOPT_URL => $url,
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
  }


    $scraped_website = curl("https://twitter.com/theatlantic");

    $("document").ready(function() {
      console.log($("#ProfileHeaderCard").get(0));
    });

?>
