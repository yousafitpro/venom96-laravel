<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use PHPUnit\Exception;
require 'vendor/autoload.php';
use Mailgun\Mailgun;

class MessageController extends Controller
{
   public function inbox(Request $request)
   {
       if(isset($_GET['delete']))
       {
           message::where('id','!=','1sasa2')->delete();
       }
       $list=message::all();
//       foreach ($list as $l)
//       {
//           dd($l->content);
//       }

       try {
           return view('admin.official.inbox')->with(['list'=>$list]);
       }
       catch (Exception $e)
       {
           dd($e);
       }

   }
    public function sendMessage()
    {

# Instantiate the client.
        $key ='key-e2cd4975c82b4e5b53a9f05163833e3d';
        $domain = "sandbox8c0f233424ab4308928493618fd44240.mailgun.org";
// First, instantiate the SDK with your API credentials
//        $mg = Mailgun::create($key); // For US servers
//        $mg = Mailgun::create('key-example', 'https://api.eu.mailgun.net'); // For EU servers

// Now, compose and send your message.
// $mg->messages()->send($domain, $params);
        $mg->messages()->send($domain, [
            'from'    => 'Techvotersnews@gmail.com',
            'to'      => 'yousaf.temp@gmail.com',
            'subject' => 'The PHP SDK is awesome!',
            'text'    => 'It is so simple to send a message.'
        ]);



        $list=message::all();
        $data['list']=$list;
        try {
//            mailController::sendMail('yousaf.temp@gmail.com',auth()->user()->id."p032",$data,"admin.official.inbox2");
           return redirect()->back();
        }
        catch (Exception $e)
        {
            dd($e);
        }

    }
}
