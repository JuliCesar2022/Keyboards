<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {

    Route::post("/whatsapp_webhook", function (Request $request) {

        $token = "EAAKrhRmikQUBAIb1zoOZATXcVd8t86OWf3bdfMqZA2h9MOinqQd6D6iGrL7xzybsctFcBZB8KFf3mRfRePjkx4qLrIdvYtCwubLPRX1a6heITpU6NTZCtrSuWcGYSrTKnqZA22ntOZB8ZBoiIPjFTIIQPeE2TIJsJNeF2O1wtaaK6ZCYZAdNmqZA73HNSDTAJy2MBe4iLoAVedQAZDZD";

//            dd($token->value);

        if ($request->TokenWebhook == $token) {
            $message = $request->message;
            $phone = $request->phone;
            $purge = $request->purge ?? false;



            return response()->json([
                'success' => true
            ]);
        }


        return response()->json([
            'success' => false,
            'message' => "UNAUTHORIZED"
        ]);
    });
});
