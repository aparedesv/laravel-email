<?php

namespace Andreu\LaravelMail\Http\Controllers;

use Andreu\LaravelMail\Mail\SendEmailMailable;
use Illuminate\Support\Facades\Mail;
use Andreu\LaravelMail\Http\Requests\SendEmailRequest;

class EmailController
{

    public function index()
    {
        return view('laravelMail::send_email');
    }

    public function sendEmail(SendEmailRequest $request)
    {
        $email = new SendEmailMailable($request);

        try {

            Mail::to($request->email)->send($email);

            return redirect(route('email_index'))->with('status', TRUE);
        } catch (\Throwable $th) {

            dd($th);
        }
    }
}
