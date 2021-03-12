<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Contacts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request){
        $fields = $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|min:8',
           'subject' => 'required',
           'content' => 'required|min:6'
        ]);


        DB::table('contacts')->insert([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'phone' => $fields['phone'],
            'created_at' => Carbon::now('America/Guatemala'),
            'updated_at' => Carbon::now('America/Guatemala')
        ]);

        Mail::to('josedan1996@gmail.com')->send(new ContactForm($fields));
        return back()->with('status','<strong>Correo enviado</strong>> pronto te estaremos contactando');
        //return new ContactForm($fields);
    }
}
