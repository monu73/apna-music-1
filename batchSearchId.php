<?php
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
  throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ .'"');
}

require_once __DIR__ . '/vendor/autoload.php';

// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.


    $arrayid=array();
$handle = fopen("trend.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.

$maxResult =1;

if (isset($line)){
  /*
   * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
   * {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
   * Please ensure that you have enabled the YouTube Data API for your project.
   */
  $DEVELOPER_KEY = 'AIzaSyB2oMXNhlDjwemhqE7xaOYp1bpIB08Kx2E';

  $client = new Google_Client();
  $client->setDeveloperKey($DEVELOPER_KEY);

  // Define an object that will be used to make all API requests.
  $youtube = new Google_Service_YouTube($client);

  $htmlBody = ''; 
	 
	  try {

    // Call the search.list method to retrieve results matching the specified
    // query term.
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
      'q' => $line,
      'maxResults' => $maxResult,
'type' => 'video',
'videoCategoryId' => '10',   
 ));

    $videos = '';
    $channels = '';
    $playlists = '';
    // Add each result to the appropriate list, and then display the lists of
    // matching videos, channels, and playlists.
    foreach ($searchResponse['items'] as $searchResult) {
      switch ($searchResult['id']['kind']) {
        case 'youtube#video':
	
        $arrayid[]=$searchResult['id']['videoId']; 
          break;
        case 'youtube#channel':
         /* $channels .= sprintf('<li>%s (%s)</li>',
              $searchResult['snippet']['title'], $searchResult['id']['channelId']);
        */  break;
        case 'youtube#playlist':
       /*   $playlists .= sprintf('<li>%s (%s)</li>',
              $searchResult['snippet']['title'], $searchResult['id']['playlistId']);
        */  break;
      }
    }

    $htmlBody .= <<<END
   <!-- <h3>Videos</h3>-->
    $videos
    <!--<h3>Channels</h3>
    <ul>$channels</ul>
    <h3>Playlists</h3>
    <ul>$playlists</ul>-->
END;
  } catch (Google_Service_Exception $e) {
    $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  } catch (Google_Exception $e) {
    $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  }
}





    }

    fclose($handle);
} else {
    // error opening the file.
} 


?>

<?php
$js="";
$js.="[";
$count = count($arrayid);
$count1 = 0;
 $count = $count-1;
foreach($arrayid as $id){
if($count1!=$count){

$js.= "'".$id."', ";

}else{

$js.= "'".$id."']";

}
$count1+=1;
}

 echo $js;
?>

