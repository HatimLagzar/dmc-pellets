<?php
  
namespace App\Http\Controllers;
   
use App\Models\Inquiry;
use Illuminate\Http\Request;
  
class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquiries = Inquiry::latest()->paginate(20);
        return view('inquiries.index')->with('inquiries', $inquiries);
    }
     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = [
            'firstname' => $request->post('Vorname'),
            'lastname' => $request->post('Nachname'),
            'address' => $request->post('Strasse'),
            'zip' => $request->post('Postleitzahl'),
            'city' => $request->post('Ort'),
            'phone' => $request->post('Telefon'),
            'email' => $request->post('Email'),
            'type' => $request->post('Ware'),
            'quantity' => $request->post('Menge'),
            'message' => $request->post('Nachricht'),
        ];

        $request->validate($payload);
        Inquiry::create($payload);

        return redirect('/danke');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        return view('inquiries.show', compact('inquiry'));
    } 
}