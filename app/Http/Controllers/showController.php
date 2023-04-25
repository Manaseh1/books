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
        $data = DB::select('select * from books');
        echo '<table border="1px">';
        echo '<tr>
            <td>Book_name</td>
            <td>Isbn</td>
            <td>Author_name</td>
        </tr>';
        foreach($data as $data ){
            echo '<tr><td>'.$data->name.'</td>';
            echo '<td>'.$data->isbn.'</td>';
            echo '<td>'.$data->author_name.'</td>';        

        }
        echo '</table>';
    }
    function showauthor(){
        $data = DB::select('select * from authors');
        echo '<table border="1px">';
        echo '<tr>
            <td>Author_name</td>
            <td>Author_id</td>

        </tr>';
        foreach($data as $data ){
            echo '<tr>';
            echo '<td>'.$data->id.'</td>';        
            echo '<td>'.$data->author_name.'</td></tr>';        

        }
        echo '</table>';
    
    }

}
