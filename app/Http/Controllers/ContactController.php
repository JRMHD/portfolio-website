<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Mail
        // $to_Name="James";
        // $to_email="mukuri@gmail.com";
        // $data=$request->all();
        // Mail::send('emails.mail',$data,function($data2),use($to_name,$to_email){
        //     $data2->to($to_email,$to_Name)->subject("This is a Testing Email");
        //     $data2->from('reaganmukabana@gmail.com', "test email");
        // })
        $alldata=$request->all();
        // $alldata=[
        //     'name'=>'iojoijoijo',
        //     'fhhsg'=>'uyuiti'
        // ];

        \Mail::to('reaganmukabana@gmail.com')->send(new \App\Mail\contactmail($alldata));
// dd("Email Send");

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
};
