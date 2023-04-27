<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class showController extends Controller
{
    //
    function enterbook(){
        return view('book');
    }
    function enterauth(){
        return view('author');
    }
    function add(Request $request){
        $request->validate([
            'book_name'=>'required',
            'isbn'=>'required',
            'author_name'=>'required'
        ]);
        $query = DB::table('books')->insert([
            'name'=>$request->input('book_name'),
            'isbn'=>$request->input('isbn'),            
            'author_name'=>$request->input('author_name'),
        ]);
        return back()->with('success',"Data have been successfully");

    }
    function add2(Request $request){
        $request->validate([
            'author_name'=>'required'
        ]);
        $query=DB::table('authors')->insert([
            'author_name' => $request->input('author_name')
        ]);
        return back();

    }
    function showbook(){
        return view('bkdis');
    }
    function showauthor(){
        return view('authdis');    
    }

}
