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

  $document = new DOMDocument;
  libxml_use_internal_errors(true);

  $document->loadHTML($output);
  $xpath = new DOMXPATH($document);

  $scrape_profile = $xpath->query("//*[@id="page-container"]/div[2]/div/div/div[1]/div/div/div/div[1]/p");


    $scraped_website = curl("https://twitter.com/theatlantic");

  //  echo $scrape_profile;

?>
