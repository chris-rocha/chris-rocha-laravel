<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     *
     * @param Request $request http request
     * @return View
     */
    public function index(Request $request) : View
    {
        return view('admin');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg|max:2048'
        ]);

        return back()
        ->with('success','File has been uploaded.');
    }

}
