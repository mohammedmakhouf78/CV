<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function PHPSTORM_META\type;

class MailsController extends Controller
{
    public function message()
    {
        Mail::to(User::first())->send(new Message(
            request('mesg'),
            request('name'),
            request('email'),
            request('subj')
        ));
        return redirect()->back();
    }
}
