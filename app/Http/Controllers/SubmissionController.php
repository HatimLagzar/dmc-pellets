<?php
  
namespace App\Http\Controllers;
   
use App\Models\Submission;
use Illuminate\Http\Request;
  
class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = Submission::latest()->paginate(20);
        return view('submissions.index')->with('submissions', $submissions);
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
            'email' => $request->post('Email'),
            'message' => $request->post('Nachricht'),
        ];

        $request->validate($payload);
        Submission::create($payload);
     
        return redirect('/danke');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        return view('submissions.show',compact('submission'));
    } 
}