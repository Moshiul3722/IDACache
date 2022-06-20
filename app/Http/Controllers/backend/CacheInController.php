<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CacheIn;
use Illuminate\Http\Request;

class CacheInController extends Controller
{
    public function index()
    {
        $cashins = CacheIn::latest()->paginate(10);
        return view('backend.cachein.index')->with('cashins',$cashins);
    }

    public function delete($id)
    {
        CacheIn::find($id)->delete();
        return redirect()->route('cashin.index')->with('success','Deleted Successfully');
    }
}
