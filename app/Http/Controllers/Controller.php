<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

use App\Models\Category;

use App\Models\Books;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function view()
    {

      $books=Books::leftJoin( 'user','books.user_id','=','user.user_id')
                     ->select('books.*', 'user.name')
                     ->orderBy('book_id')
                    ->paginate(10);


        return view('welcome',compact('books'));  
        }
        public function search_book(Request $request)
    {
                $searchterm = $request->input('term');

        /*$searchResults = (new Search())
            ->registerModel(\App\Libra::class, 'titulli')

          ->perform($searchterm);
           return view('biblioteka.search', compact('searchResults','searchterm'));*/

          $books=Books::where('book_title', 'LIKE', '%'.$searchterm.'%')
          ->orwhere('author_1', 'LIKE', '%'.$searchterm.'%')
          ->orwhere('author_2', 'LIKE', '%'.$searchterm.'%')
          ->orwhere('publication_year', 'LIKE', '%'.$searchterm.'%')
          ->get();
         
         

           return view('search_book', compact('books'));

    }


}
