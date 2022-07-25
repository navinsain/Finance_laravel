<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Support\Facades\Storage;

use App\Models\registration;
use App\Models\contacts;
use Illuminate\Http\Request;
use Hash;
use Session;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function Coaching()
    {
        return view('Coaching');
    }

    public function contact()
    {
        return view('contact');
    }

    public function Finance()
    {
        return view('Finance');
    }

    public function network()
    {
        return view('network');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'first name'=>'required',
            // 'last name'=>'required',
            // 'mothers name'=>'required',
            // 'fathers name'=>'required',
            // 'address'=>'required',
            // 'Gender'=>'required',
            // 'DOB'=>'required',
            // 'address'=>'required',
            // 'pincode'=>'required',
            // 'state'=>'required',
            // 'city'=>'required',
            // 'contact number'=>'required',
            'email'=>'required|email|unique:registrations',
            'password'=>'required|min:5|max:12',
            // 'Lok sabha'=>'required',
            // 'Vidhan sabha'=>'required',
            // 'Referral code'=>'required',
            // 'file'=>'required'

        ]);

         $res=new registration;
        $res->first_name=$request->input('first_name');
        $res->last_name=$request->input('last_name');
        $res->mothers_name=$request->input('mothers_name');
        $res->fathers_name=$request->input('fathers_name');
        $res->address=$request->input('address');
        $res->inlineRadioOptions=$request->input('inlineRadioOptions');
        $res->dob=$request->input('dob');
        $res->pincode=$request->input('pincode');
        $res->state=$request->input('state');
        $res->city=$request->input('city');
        $res->contact=$request->input('contact');
        $res->email=$request->input('email');
        // $res->password=$request->input('password');
        $res->password = Hash::make($request->input('password'));
        $res->loksabha=$request->input('loksabha');
        $res->vidhansabha=$request->input('vidhansabha');
        $res->referralcode=$request->input('referralcode');
        $res->filename=$request->input('filename');
        $res->save();

        // $request->session()->flash('msg','Data submited');
        // return redirect('PDF');


        $pdf = PDF::loadView('download-pdf.customers-pdf', [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'mothers_name' => $request->input('mothers_name'),
            'fathers_name' => $request->input('fathers_name'),
            'address' => $request->input('address'),
            'inlineRadioOptions' => $request->input('inlineRadioOptions'),
            'dob' => $request->input('dob'),
            'pincode' => $request->input('pincode'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            // 'password' => $request->input('password'),
            'loksabha' => $request->input('loksabha'),
            'vidhansabha' => $request->input('vidhansabha'),
            'referralcode' => $request->input('referralcode'),
            'filename' => $request->input('filename'),
        ]);

        // Storage::put('public/storage/uploads/'.'-'.rand() .'_'.time(). '.'.'pdf', $pdf->output());
        return $pdf->stream();
        // return $pdf->download('sagar');

        // return response()->json(['success' => 'Customer saved Successfully']);
        
        // if ($res) {
        //     return redirect('PDF');
        // } else {
        //     return back()->with('fall', 'Somthing wrong');
        // }
    }


    public function contactstore(Request $request)
    {
        $res=new contacts;
        $res->requirements=$request->input('requirements');
        $res->countryCode=$request->input('countryCode');
        $res->number=$request->input('number');
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->save();
    }



    public function loginstore(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            // 'password'=>'required'
            'password'=>'required|min:5|max:12'
        ]);
        $res = registration::where('email', '=', $request->email)->first();
        if ($res){
            if (Hash::check($request->password, $res->password)){
                $request->session()->put('loginId', $res->id);
                return redirect('/index');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else {
            return back()->with('fail','This email is not registered.');
        }
    }

    public function dashboard(){
        $data = array();
        if (Session::has('loginId')){
            $data = registration::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
