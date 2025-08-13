<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
       public function home()
    {

        return view('index');
    }
    
    public function apropos()
    {
        return view('layouts.Pages.apropos');
    }
    
    public function service()
    {
        return view('layouts.Pages.service');
    }
    
    public function contact()
    {
        return view('layouts.Pages.contact');
    }

    public function postContactPublic(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'required|string|max:20',
        'message' => 'required|string|max:1000',
    ], [
        'email.email' => 'Veuillez entrer une adresse e-mail valide.',
    ]);

    try {
        Mail::to('espokeys1@gmail.com')->send(
            new \App\Mail\ContactPublicMail(
                $request->name,
                $request->email,
                $request->telephone,
                $request->message
            )
        );

        return redirect()->back()->with('success', 'Votre message a bien été envoyé !');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['email' => 'Une erreur est survenue. Veuillez réessayer plus tard.']);
    }
}

}
