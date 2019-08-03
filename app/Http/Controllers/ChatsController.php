<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		return view('user.chat');
	}

/**
 * Fetch all messages
 *
 * @return Message
 */
public function fetchMessages()
{
	$messages=Message::with('user')->get();
	$combination=[];
	//dd($messages[0]->user->name);
	foreach($messages as $key=>$value)
	{
		$combination[$key]=["message"=>$value->message,"user"=>["name"=>$value->user->name]];
	}
	return $combination;
}

/**
 * Persist message to database
 *
 * @param  Request $request
 * @return Response
 */
public function sendMessage(Request $request)
{
	$user = Auth::user();

	$message = $user->messages()->create([
		'message' => $request->input('message')
	]);

	broadcast(new MessageSent($user, $message))->toOthers();

	return ['status' => 'Message Sent!'];
}

}
