<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
//        $validation = $request->validate([
//            'subject' => 'required|min:5|max|100',
//            'message' => 'required|min:15|max:100'
//        ]);
    }
}
