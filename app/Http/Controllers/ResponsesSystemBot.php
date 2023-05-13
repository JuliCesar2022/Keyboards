<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Repositories\BotWhatsApp\BotWhatsApp;

class ResponsesSystemBot extends Controller
{

    const hostPoe = "https://principalpoebot.onrender.com";
    static  function  whatsapp_webhook($phone, $message,$purge){

        return true;

    }



}
