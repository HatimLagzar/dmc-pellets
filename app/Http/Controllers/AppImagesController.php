<?php

namespace App\Http\Controllers;

use App\Models\AppImage;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class AppImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = AppImage::all();
        return view('images.index')->with('images', $images);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->allFiles();
        foreach ($files as $originalFileName => $file) {
            $originalFileName = str_replace('%20', ' ', $originalFileName);
            $originalFileName = str_replace('%40', '.', $originalFileName);

            $file->storeAs('/', $originalFileName, 'appImages');
        }

        return redirect()
            ->back()
            ->with('success', 'Images updated successfully!');
    }
}