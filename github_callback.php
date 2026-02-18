<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$client_id = getenv('GITHUB_CLIENT_ID');
$client_secret = getenv('GITHUB_CLIENT_SECRET');

if(isset($_GET['code'])){

    $code = $_GET['code'];

    $token_url = "https://github.com/login/oauth/access_token";

    $post_data = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $code
    ];

    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    $access_token = $data['access_token'];

    // Get user details
    $ch = curl_init("https://api.github.com/user");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: token $access_token",
        "User-Agent: RSCAFE-App"
    ]);

    $user = json_decode(curl_exec($ch), true);
    curl_close($ch);

    echo "<h2>GitHub Login Successful 🎉</h2>";
    echo "Username: " . $user['login'] . "<br>";
    echo "Profile URL: " . $user['html_url'];
}
else{
    echo "Login Failed!";
}
?>