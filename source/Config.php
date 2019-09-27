<?php
// php tips 7
if (empty(session_start())){
    session_start();
    }
define("ROOT", "http://localhost/app-mulher-oficial" );
define("SITE", "#AppMulher");

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    //echo $uri;
    if($uri){
        return ROOT . "/{$uri}";
    }

    return ROOT;
}

// fim aula 7

define("DATA_LAYER_CONFIG", [
"driver" => "mysql",
"host" => "localhost",
"port" => "3306",
"dbname" => "espacomulherbd",
"username"=> "root",
"passwd"=> "",
"options"=>[
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);

/*
$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

*/
// HOST SMTP
define("MAIL",[
"host" => "smtp.gmail.com",
"port" => "587",
"user" => "rogercaetanos@gmail.com",
"passwd"=>"",
"from_name"=> "Rogério Caetano Santos",
"from_email"=> "cursos@fieb.edu.com.br"
]);


//define("URL_TOKEN_FIEB", "http://192.168.2.19/GestaoMulher/AppMulherAPI/token");
//define("URL_BASE_FIEB","http://192.168.2.19/GestaoMulher/AppMulherAPI/api/App/");
//define("EXPIRES_IN_PADRAO",  "3");

define("INI_FIEB_CONFIG",[
    "INI_FIEB_USERNAME"     => "Fieb.Educ",
    "INI_FIEB_PASSWORD"     => "!Fieb5778@Api",
    "INI_FIEB_GRANT_TYPE"   => "password",
    "URI_TOKEN_INI_FIEB"    => "http://192.168.2.19/GestaoMulher/AppMulherAPI/token",
    "URI_END_POINT_INI_FIEB"=> "http://192.168.2.19/GestaoMulher/AppMulherAPI/api/App/",
    "EXPIRES_IN_PADRAO" => "3"
]);

/*
 * $provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => 'demoapp',    // The client ID assigned to you by the provider
    'clientSecret'            => 'demopass',   // The client password assigned to you by the provider
    'redirectUri'             => 'https://example.com/your-redirect-url/',
    'urlAuthorize'            => 'https://example.com/oauth2/lockdin/authorize',
    'urlAccessToken'          => 'https://example.com/oauth2/lockdin/token',
    'urlResourceOwnerDetails' => 'https://example.com/oauth2/lockdin/resource'
]);
 * */
// facebook

/*
 * $provider = new \League\OAuth2\Client\Provider\Facebook([
    'clientId'          => '{facebook-app-id}',
    'clientSecret'      => '{facebook-app-secret}',
    'redirectUri'       => 'https://example.com/callback-url',
    'graphApiVersion'   => 'v2.10',
]);
 *
 * */


define("FACEBOOK", [
    "app_id" => "509177429885002",
    "app_secret" => "d0d7913ad71c2520f05890d9a214a090",
    "app_redirect" => "http://localhost/phptips/ep01",
    "app_version" => "v4.0"
]);

define("DATE_TIMEZONE", "America/Sao_Paulo");
date_default_timezone_set(DATE_TIMEZONE);
define("DATE_BR", "d/m/Y H:i:s"); // formato padrão utilizado aqui no Brasil
define("DATE_US", "Y-m-d H:i:s.u");