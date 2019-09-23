<?php

namespace brifiction\EntwurfhausContact\Http\Controllers;

use brifiction\EntwurfhausContact\Models\EntwurfhausContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use brifiction\EntwurfhausContact\Mail\MessageSent;

class EntwurfhausContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entwurfhaus-contact::index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $request->validate( [
            'name' => 'required',
            'email'=> 'required|email',
            'message' => 'required|min:12',
        ]);

        $name = $result['name'];
        $email = $result['email'];
        $message = $result['message'];

//        EntwurfhausContact::create([
//            'name' => $name,
//            'email' => $email,
//            'message' => $message,
//        ]);

        Mail::to(config('_entwurfhaus_contact.admin_email'))
            ->send(new MessageSent($name, $email, $message));

        return view('entwurfhaus-contact::index')
            ->with('message', 'The message has been sent succesfully!');
    }
}

