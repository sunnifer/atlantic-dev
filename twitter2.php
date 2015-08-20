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

  function scrape_between($data, $start, $end) {
    $data = stristr($data, $start);
    $data = substr($data, strlen($start));
    $stop = stripos($data, $end);
    $data = substr($data, 0, $stop);
    return $data;
  }

    $scraped_website = curl("https://twitter.com/theatlantic");

    $scraped_data = scrape_between($scraped_website, "<title>", "</Title>");

    echo $scraped_data;

?>
