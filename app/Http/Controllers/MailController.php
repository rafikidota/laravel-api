<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // Sending basic emails
    public function basic()
    {
        $data = ['message' => 'Welcome to Laravel'];
        // $data = array('message' => 'Welcome to Laravel');
        Mail::send([], $data, function ($body) {

            $body->to('dlesmes@nauta.cu', 'dlesmes');
            $body->subject('Laravel');
            $body->from('rafiki33dota@gmail.com', 'rafikidota');
        });

        return response()->json([
            'ok' => true,
            'msg' => 'Mail sent successfully',
            'code' => 200
        ]);
    }

    public function html()
    {
        $data = [
            'title' => 'Testing',
            'message' => 'Welcome to Laravel'
        ];
        // $data = array('message' => 'Welcome to Laravel');
        Mail::send('mails.testing', $data, function ($body) use ($data) {

            $body->to('dlesmes@nauta.cu', 'dlesmes');
            $body->subject('Laravel' . $data['title']);
            $body->from('rafiki33dota@gmail.com', 'rafikidota');
        });

        return response()->json([
            'ok' => true,
            'msg' => 'Mail sent successfully',
            'code' => 200
        ]);
    }

    public function template()
    {
        $data = [
            'title' => 'Testing',
            'message' => 'Welcome to Laravel'
        ];
        // $data = array('message' => 'Welcome to Laravel');
        Mail::send('mails.template', $data, function ($body) use ($data) {

            $body->to('dlesmes@nauta.cu', 'dlesmes');
            $body->subject('Laravel' . $data['title']);
            $body->from('rafiki33dota@gmail.com', 'rafikidota');
        });

        return response()->json([
            'ok' => true,
            'msg' => 'Mail sent successfully',
            'code' => 200
        ]);
    }
}
