<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ErrorFormRequest;
use Mail;
use Session;
use Redirect;

class EmailController extends Controller
{
    public function getContact()
    {
        return view('contact');
    }
    public function postContact(ErrorFormRequest $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'min:5',
            'message' => 'min:5'
            ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message

        );    
        Mail::send('emails.contact', $data, function($message) use($data) {
            $message->from($data['email']);
            $message->to('dominotars77@gmail.com');
            $message->subject($data['subject']);
        });
        return redirect()->route('contact')->with([
            'alert_class'   => 'success',
            'alert_message' => 'Your message was successfully sent !!'
        ]);
    }
}
