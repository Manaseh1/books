<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
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
            'book_name'=>['required',Rule::unique('books','name')],
            'isbn'=>['required',Rule::unique('books','isbn')],
            'author_name'=>'required',
        
        ]);
        $query= [
            'name'=>$request->input('book_name'),
            'isbn'=>$request->input('isbn'),            
            'author_name'=>$request->input('author_name'),
            
        ];
        $query = DB::table('books')->insertOrIgnore($query);
        
        return back();
    }
    function add2(Request $request){
        $request->validate([
            'author_name'=>['required',Rule::unique('authors','author_name')]
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
