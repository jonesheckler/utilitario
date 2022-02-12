<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClientTemplate;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $details = [
            'subject' => $request->subject,
            'title' => $request->title,
            'to' => $request->to,
            'template' => $request->template,
            'fields' => $request->fields
        ];

        $client = ClientTemplate::find($request->template)->clientSmtp;

        // Se o Ip For válido para a requisição e a key bater 
        if(($request->ip() == $client->ip) && ($request->key == $client->key)){
                $fields = ClientTemplate::find($request->template)->fields;
                \Mail::to($request->to)->send(new \App\Mail\MyTestMail($details, $fields, $request->replyTo));

                return response()->json([
                    'status' => true,
                    'message' => 'Success send mail',
                ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Erro to send mail',
        ]);

    }
}
