<?php

namespace App\Http\Controllers\Web;

use App\Models\Design;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
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
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $file_model = new Design;


        if($request->file()) {
            $file_model->type = $request->type;


            $file_name = time() . '_' . $request->file->getClientOriginalName();
            $file_path = $request->file('file')->storeAs('uploads', $file_name, 'public');

            // dd($file_model);

            // $file_model->name = time() . '_' . $request->file->getClientOriginalName();
            $file_model->thumb = '/storage/' . $file_path;
            $file_model->save();


            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $file_name);
        }
    }

}
