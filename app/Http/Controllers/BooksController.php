<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

use App\Imports\BooksImport;

use App\Models\User;



use App\Models\Books;

use Illuminate\Support\Facades\Auth;

use App\Exports\BooksExport;

class BooksController extends Controller
{
   
   //Import 
   public function importForm(){
    
        return view('libra.file-import');
    }

    public function import(Request $request){
        Excel::import(new BooksImport, $request->file);
        return "Rekordet u shtuan";
    }

public function export() 
    {
        return Excel::download(new BooksExport, 'books.xlsx');
    }



 // Krijo liber- Forme
 public function createBooks()
    {
        
        return view('libra.shto_liber');  
    } 

// Shto liber

 public function addBooks(Request $request)
    {
      

        $books = new Books;
        $books->book_title = $request->book_title;
        $books->author_1 = $request->author_1;
        $books->author_2 = $request->author_2;
        $books->description = $request->description;
        $books->publication_year = $request->publication_year;
        $books->user_id= Auth::user()->user_id;
        $books->save();
            \Session::flash('success', 'Ndryshimet u ruajten me sukses' );
        return redirect('/libra');
    }
 //Fshi liber   
 public function fshi_liber($book_id)
    {
        Books::where('book_id', $book_id)->delete();
                \Session::flash('success', 'Ndryshimet u ruajten me sukses' );

         return redirect()->intended('/libra');
    }


// Liste librash

     public function show()
    {

      $books=Books::leftJoin( 'user','books.user_id','=','user.user_id')
                     ->select('books.*',  'user.name')
                     ->orderBy('book_id')
                     ->get();


        return view('libra.libra',compact('books'));  
        }

    // Editim i librave

        public function edit_book($book_id) 
           {
             $books=Books::leftJoin('user','books.user_id','=','user.user_id')
                    ->where('books.book_id',$book_id)
                     ->select('books.*', 'books.book_title','books.author_1','books.author_2','books.description','books.publication_year','user.user_id')
                    ->first();
        
               $users=User::all();

                    return view('libra.edit_book',compact('books','users'));    

            }

 public function perditeso_liber(Request $request, $book_id)
      {
        $books = Books::find($book_id);
       $this->validate($request, [
        'book_title' => 'required|max:1000',
        


        ]);
        $keys = [ 'book_title', 'publication_year', 'user_id','author_1','author_2','description'];
        $input = [
            'book_title' => $request['book_title'],
            'author_1' => $request['author_1'],
            'author_2' => $request['author_2'],
            'publication_year' => $request['publication_year'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],

        ];
                 
        Books::where('book_id', $book_id)
            ->update($input);
                    \Session::flash('success', 'Ndryshimet u ruajten me sukses' );
 
        return redirect('/libra');
       }



}
