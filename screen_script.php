<?php
//website url
$siteURL = $_POST["url"];

//call Google PageSpeed Insights API
$googlePagespeedData = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$siteURL&screenshot=true");

//decode json data
$googlePagespeedData = json_decode($googlePagespeedData, true);

//screenshot data
$screenshot = $googlePagespeedData['screenshot']['data'];
$screenshot = str_replace(array('_','-'),array('/','+'),$screenshot); 

//display screenshot image
echo "<img src=\"data:image/jpeg;base64,".$screenshot."\" />";
 $binary=base64_decode($screenshot);
$file = fopen("image.jpg", "w");
fwrite($file, $binary);
fclose($file);
?>