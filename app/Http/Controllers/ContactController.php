<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Send contact message.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(ContactRequest $request)
    {
        return back()->with('success',__('Message sent'));
    }
}
