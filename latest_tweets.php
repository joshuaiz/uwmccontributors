<?php 

$data = 'http://search.twitter.com/search.json?q=unitedwaychi&rpp=5'; 
$feed = file_get_contents($data); //Getting the JSON data.
 
$valid_data = json_decode($feed); // Converting the JSON data to PHP format.
$valid_data = $valid_data->results; // Valid data now with just the tweet result.
 
// Printing out the feed's data in our required format.

if ($valid_data) {


	foreach ($valid_data as $key=>$value) {
	  print '<p class="twitter-data">';
	  print '<a href="http://twitter.com/'. $value->from_user . '">';
	  print '<img style="float:left;height:28px;width:28px;margin-right:10px;" src="' . $value->profile_image_url . '" /></a>';
	  print '</a>';
	  print '<span>' . twitter_status_links($value->text) . '</span>';
	  print '</p>';
	}
} else {
echo '<p>Cannot get tweets right now. Please refresh the page or try again later.</p>';
}




function twitter_status_links($status_text) {
  // linkify URLs
  $status_text = preg_replace(
    '/(https?:\/\/\S+)/',
    '<a href="\1" class="preg-links">\1</a>',
    $status_text
  );
 
  // linkify twitter users
  $status_text = preg_replace(
    '/(^|\s)@(\w+)/',
    '\1@<a href="http://twitter.com/\2" class="preg-links">\2</a>',
    $status_text
  );
 
  // linkify tags
  $status_text = preg_replace(
    '/(^|\s)#(\w+)/',
    '\1#<a href="http://search.twitter.com/search?q=%23\2" class="preg-links">\2</a>',
    $status_text
  );
 
  return $status_text;
}
?>