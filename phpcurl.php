<?php
$i=1;
while ($i <= 10) {

$ch = curl_init();
 
// 2. set the options, including the url
echo "1. post to http://challenge-your-limits.herokuapp.com/call/me <br />";
curl_setopt($ch, CURLOPT_URL, "http://challenge-your-limits.herokuapp.com/call/me");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST,1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,"");

// 3. execute and fetch the resulting HTML output
$output = curl_exec($ch);
if ($output === FALSE) {
 
    echo "cURL Error: " . curl_error($ch);
 
}
echo ($output); 
echo "<br />";

// // 4. 
// echo "2. post to http://challenge-your-limits.herokuapp.com/challenge_users No data <br />";
// curl_setopt($ch, CURLOPT_URL, "http://challenge-your-limits.herokuapp.com/challenge_users");
// $output = curl_exec($ch);
// if ($output === FALSE) {

//     echo "cURL Error: " . curl_error($ch);

// }
// echo ($output); 
// echo "<br />";

// // 5.
// echo "3. post to http://challenge-your-limits.herokuapp.com/challenge_users with name data <br />";
// $post_data= array(
// 	"name"=>"giang",
// );
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
// $output = curl_exec($ch);
// if ($output === FALSE) {

//     echo "cURL Error: " . curl_error($ch);

// }
// echo ($output);
// echo "<br />";

// 6.
echo "4. post to http://challenge-your-limits.herokuapp.com/challenge_users with add email data <br />";
curl_setopt($ch, CURLOPT_URL, "http://challenge-your-limits.herokuapp.com/challenge_users");
$name = generateRandomString();
$email = $name."@yahoo.com";
echo $email."<br />";
$post_data= array(
	"name"=>$email,
	"email"=>$email,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
if ($output === FALSE) {

    echo "cURL Error: " . curl_error($ch);

}
echo $output;
//echo ($output["message"]);
echo "<br />";

// 7.
echo "5. post to http://challenge-your-limits.herokuapp.com/challenge_users get on output with add name, and comment data <br />";
curl_setopt($ch, CURLOPT_URL, "http://challenge-your-limits.herokuapp.com/challenge_users");
$token=substr($output, 102,-27);
echo $token;
$post_data= array(
	"utf8"=>"✓",
	"_method"=>"patch",
	"authenticity_token"=>"I5scyDKvVBckkW2X7eyC2kxm3g1ThSfHbGc+O9FHuIv8dotZurly02UtOl3My494exW0F4SPYcExLAupVzQNIQ==",
	"user[token]"=>$token,
	"user[name]"=>$name,
	"user[comment]"=>$name,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
if ($output === FALSE) {

    echo "cURL Error: " . curl_error($ch);

}
echo $output;

echo "<br />";

curl_close($ch); 
$i++;
}
//echo $output;
//header('Location: http://challenge-your-limits.herokuapp.com/winners');
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<script type="text/javascript" language="Javascript">window.open('http://challenge-your-limits.herokuapp.com/winners');</script>