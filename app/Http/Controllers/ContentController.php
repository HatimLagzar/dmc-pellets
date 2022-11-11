<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contacts'] = DB::table('content')->where('type', 'contacts')->first();
        $data['dealer_name'] = DB::table('content')->where('type', 'dealer_name')->first();

        return view('content.index')->with($data);
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
            'contacts' => 'required|string|max:4096',
            'dealer_name' => 'required|string|max:128'
        ];

        $request->validate($payload);

        DB::table('content')->updateOrInsert(['type' => 'contacts'], ['user_id' => Auth::id(), 'html_data' => $request->post('contacts'), 'updated_at' => now()]);
        DB::table('content')->updateOrInsert(['type' => 'dealer_name'], ['user_id' => Auth::id(), 'html_data' => $request->post('dealer_name'), 'updated_at' => now()]);

        return redirect()->route('content.index');
    }
     

    public function show()
    {

    } 
}
