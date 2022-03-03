<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubmissionController extends Controller
{
    public function create()
    {
        return view('layouts.getin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'topic' => 'required',
            'article' => 'required'
        ]);
        $query = DB::table('submission')->insert([
            "name" => $request["name"],
            "email" => $request["email"],
            "city" => $request["city"],
            "topic" => $request["topic"],
            "article" => $request["article"]
        ]);
        return redirect('/get-involved')->with('success', 'Data submission successful!');
    }

    public function index()
    {
        $submission = DB::table('submission')->get();
        return view('admin.submission', compact('submission'));
    }

    public function show($id) {
        $submission = DB::table('submission')->where('id', $id)->first();
        return view('admin.show',compact('submission'));
    }

    public function destroy($id) {
        $submission = DB::table('submission')->where('id', $id)->delete();
        return redirect('/admin/submission')->with('success', 'Submission successfully deleted!');
    }
}
