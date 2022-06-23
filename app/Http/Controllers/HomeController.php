<?php

namespace App\Http\Controllers;

use App\Models\Books;

use App\Models\User;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books=Books::leftJoin( 'user','books.user_id','=','user.user_id')
                     ->select('books.*','user.name')
                     ->orderBy('book_id')
                    ->paginate(10);
        return view('home',compact('books'));
    }
 
  public function search(Request $request)
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
         
          $user=User::where('name', 'LIKE', '%'.$searchterm.'%')->get();

           return view('search', compact('books','user'));

    }
 
}
