<?php

namespace App\Repositories\BotWhatsApp;


class BotWhatsApp
{
    static public function senMessage($phone, $message):bool{


        $HostBotWhatsApp = "https://keyboards-bot.onrender.com";
        $token = "EAAKrhRmikQUBAIb1zoOZATXcVd8t86OWf3bdfMqZA2h9MOinqQd6D6iGrL7xzybsctFcBZB8KFf3mRfRePjkx4qLrIdvYtCwubLPRX1a6heITpU6NTZCtrSuWcGYSrTKnqZA22ntOZB8ZBoiIPjFTIIQPeE2TIJsJNeF2O1wtaaK6ZCYZAdNmqZA73HNSDTAJy2MBe4iLoAVedQAZDZD";

        try {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $HostBotWhatsApp."/send",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode([
                    "token"=>$token,
                    "message"=>$message,
                    "phone"=>$phone
                ]),
                CURLOPT_HTTPHEADER => array(
                    'Accept: application/json',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);



//            dd($response);
            curl_close($curl);

            return true;
        }catch (\Exception $exception){
            return false;
        }


    }

    static  function ping(string $url):string
    {

        try {



            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url."/ping",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Accept: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
//                dd($response);

            return $response;
        }catch (\Exception $exception){
            return $exception;
        }

    }
}
