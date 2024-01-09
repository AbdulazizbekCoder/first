require 'config.php';
$apiURL = 'https://api.telegram.org/bot<$BOT_TOKEN>/getMe';
$response = file_get_contents($apiURL);
echo $response;