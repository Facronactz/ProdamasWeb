<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KritikAdmin;


class KritikAdminController extends Controller
{
    public function index()
    {
        $kritik = KritikAdmin::all();
    	return view('admin.kritik.list', compact('kritik'));
 
    }
    public function edit($id) {
        $kritik = KritikAdmin::findOrFail($id);
        return view('admin.kritik.detail', compact('kritik'));
    }
    public function destroy($id) {
        $submission = DB::table('kritik')->where('id', $id)->delete($id);
        return redirect('/admin/list-kritik')->with('success', 'Submission successfully deleted!');
    }

}
