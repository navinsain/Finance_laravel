<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class PDFMaker extends Controller
{
    function gen()
    {
        $pdf=App::make('dompdf.wrapper');
        $data='<h1>Header wihout style</h1> <h2 style="color:red">With Style</h2>';
        $pdf->loadHTML($data);
        // // $pdf->PDF::loadView('first_name',compact('first_namr'));
        return $pdf->stream();
        // // return $pdf->download('sagar');



        // // $registration = register::all();
        // // return view('registration',compact('register'));


       
    }

//     public function postForm(Request $request)
//     {
//     $pdf = PDF::loadView('registration', [
//         'first_name' => $request->input('fname'),
//         'last_name' => $request->input('last_name'),
//         // ... and more data if you like
//     ]);

//     return $pdf->download('signed_form.pdf');

// }
}
