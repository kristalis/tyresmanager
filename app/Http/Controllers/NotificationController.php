<?php

namespace TireManager\Http\Controllers;

use Illuminate\Http\Request;
use TireManager\Notifications\InboxMessage;
use TireManager\Notifications\MOTMessage;
use TireManager\Http\Requests\ContactFormRequest;
use TireManager\Http\Requests\MOTFormRequest;
use TireManager\User;

class NotificationController extends Controller
{
     public function sendMessage(ContactFormRequest $request)
	{        //send the admin a notification
		$admin =  User::first();
		//return response($admin,200);
		$admin->notify(new InboxMessage($request));
		// redirect the user back
		return redirect()->back()->with('success', 'Thanks for contacting us! We will be in touch');
	}
	  public function bookMOT(MOTFormRequest $request)
	{        //send the admin a notification
		$admin = User::first();
		$admin->notify(new MOTMessage($request));
		// redirect the user back
		return redirect()->back()->with('success', 'Thanks for contacting us! We will be in touch');
	}
}
