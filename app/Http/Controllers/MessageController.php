<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    
    public function index(){
            $message = Message::paginate(10);
        
            return view('home', [
                "messages" => $message
                ]);
        }

    public function store(Request $req){
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);


        $message = new Message;
        $message->name = request('name');
        $message->email = request('email');
        $message->phone_number = request('number');
        $message->subject = request('subject');
        $message->message = request('message');
        $message->save();

        return redirect('/contact')->with('post_status', 'Terimakasih, pesan anda sudah kami terima');
        // return $req->input();
    }

    public function destroy($id){
        // $member = Member::findOrFail($id);
        // $member->delete();

        // return redirect('/home');
    }

    
}
