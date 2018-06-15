<?php

namespace App\Http\Controllers;

use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class NotificationController extends Controller
{
    public function store(Request $request){
        $message =$request->get("message");

        $ids = $request->get("ids");


        $sendSms = $request->get("sendSms");
        $sendMail = $request->get('sendMail');
        foreach ($ids as $id){
            $notification=Notification::create(['user_id' =>$id,'message' =>$message,'sendSms' => $sendSms,'sendEmail' => $sendMail]);

            //si on doit notifier par mail

            $user = User::find($id);

            if ($sendMail){
                Mail::send("mail",compact('notification'),function ($message) use ($user){
                    $message->from('xcsm.2018@gmail.com', 'XCSM');
                    $message->to($user->email);
                    $message->subject('XCSM notification');
                });
            }
        }
    }


    public function index(){
        $notifications = Notification::with("user")->where(['sendSms' => true,'smsIsSend' => false])->get();

        foreach ($notifications as $notification){
            $notification->smsIsSend = true;
            $notification->save();
        }

        return Response::json($notifications,200,[],JSON_NUMERIC_CHECK);
    }
}
