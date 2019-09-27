<?php
namespace Source\Support;

class ApiIniFieb
{
    public function __construct()
    {
     
        if(!isset($_SESSION["expires_in"])){
            $dateInterval = new \DateInterval("PT".INI_FIEB_CONFIG["EXPIRES_IN_PADRAO"]."M");
            $dateNow = new \DateTime("now");
            $expires_in = $dateNow->add($dateInterval);
            $_SESSION["expires_in"] = $expires_in;
        }

    }

    private function tokenCurl()
    {
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => INI_FIEB_CONFIG["URI_TOKEN_INI_FIEB"],
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "username=".INI_FIEB_CONFIG["INI_FIEB_USERNAME"]."&password=".INI_FIEB_CONFIG["INI_FIEB_PASSWORD"]."&grant_type=".INI_FIEB_CONFIG["INI_FIEB_GRANT_TYPE"],
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            //$body =  $response->getContents();
            $datas = json_decode($response,true);
            $access_token = $datas['access_token'];
            $token_type = $datas['token_type'];
            $expires_in = $datas['expires_in'];
            // Transformando para minutos
        $expires_in = $expires_in/1000;
        $expires_in = intval($expires_in);
       // $expires_in = INI_FIEB_CONFIG["EXPIRES_IN_PADRAO"];
       // var_dump($expires_in);
        $dateInterval = new \DateInterval("PT".$expires_in."M");
       // var_dump($dateInterval);
        $dateNow = new \DateTime("now");
        $expires_in = $dateNow->add($dateInterval);
            $_SESSION["access_token"] = $access_token;
            $_SESSION["expires_in"] = $expires_in;
        }
    }

    private function token()
    {

        $client = new \GuzzleHttp\Client();
        $response = $client->post(INI_FIEB_CONFIG["URI_TOKEN_INI_FIEB"] , [
            'form_params' =>
                [
                    'username'   => INI_FIEB_CONFIG["INI_FIEB_USERNAME"],
                    'password'   => INI_FIEB_CONFIG["INI_FIEB_PASSWORD"],
                    'grant_type' => INI_FIEB_CONFIG["INI_FIEB_GRANT_TYPE"]
                ]
        ], [
            'headers' => [
                'encoding' => 'application/x-www-form-urlencoded'
            ]
        ]);

        // echo $response->getStatusCode() . "<br>";
        $body =  $response->getBody()->getContents();

        $datas = json_decode($body,true);
        //echo "<pre>";
        //print_r($datas);
        $access_token = $datas['access_token'];
        $token_type = $datas['token_type'];
        $expires_in = $datas['expires_in'];
        // Transformando para minutos
        $expires_in = $expires_in/1000;
        $expires_in = intval($expires_in);
       // $expires_in = INI_FIEB_CONFIG["EXPIRES_IN_PADRAO"];
       // var_dump($expires_in);
        $dateInterval = new \DateInterval("PT".$expires_in."M");
       // var_dump($dateInterval);
        $dateNow = new \DateTime("now");
        $expires_in = $dateNow->add($dateInterval);
        $_SESSION["access_token"] = $access_token;
        $_SESSION["expires_in"] = $expires_in;
       //echo $_SESSION["access_token"];  
    }

    private function timeExpiresToken()
    {
 
        $dateNow = new \DateTime("now");
        $diff = $dateNow->diff($_SESSION["expires_in"]);       
        if($diff->invert == 1 || !isset($_SESSION["access_token"])){
            return true;
        }else{
           return false;
        }

    }

    public function endPoints($endPoint, $bodyParameters = null, $method = 'POST')
    {
        
       if($this->timeExpiresToken() ==  true){
          // $this->token(); funciona tbém (guzzlehttp)
           $this->tokenCurl();
       }

        // echo $access_token;
        $client = new \GuzzleHttp\Client(['base_uri' => INI_FIEB_CONFIG["URI_END_POINT_INI_FIEB"]]);
        $headers = [
            'Authorization' => 'Bearer ' . $_SESSION["access_token"],
            'Accept'        => 'application/json'
            
        ];
      
        $response = $client->request($method, $endPoint , [
            'headers' => $headers
        ],
        [
            'body' => $bodyParameters
        ]
    );
     

        $body = $response->getBody()->getContents();
        $datas = json_decode($body,true);

        return $datas;
    }

    public function endPointIncluirFrequencia($endPoint, $bodyParameters, $method = 'POST')
    {
        
       if($this->timeExpiresToken() == true){
        // $this->token(); funciona tbém (guzzlehttp)   
           $this->tokenCurl();
       }
  
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => INI_FIEB_CONFIG["URI_END_POINT_INI_FIEB"] . $endPoint,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_POSTFIELDS => $bodyParameters,
      CURLOPT_HTTPHEADER => array(
        "authorization: Bearer {$_SESSION["access_token"]}",
        "cache-control: no-cache",
        "content-type: application/json"
      ),
    ));
   // echo $_SESSION["access_token"];
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    return $response;
   
   }

}