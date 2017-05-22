<?php
namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone', null),
            'text' => $request->input('text')
        ]);

        return redirect('contact')->with('status', true);
    }
}
