<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');            
        }
        else{
            return redirect('/login');
        }
    }

    public function dashboard(Request $request)
    {

        $perPage = $request->input('perPage', 6);
        $pageNumber = $request->input('page', 1);
        $url = $request->input('url', url()->current());
        $query = $request->input('query', []);

        $data  = $this->getCategories($perPage , $pageNumber , $url, $query);
        Log::info($data);
        $data = [
            'data' => $data,
            'perPage' => 6,
            'pageNumber' => 1
        ];
        return view('user.index',$data);
    }

    public function getCategories($perPage = 6 , $pageNumber = 1, $url = null, $query = null)
    {
        // $apiKey = Auth::user()->unique_key;       
        $array = Http::get('https://the-trivia-api.com/api/categories');

        Log::info($array);
        $array = json_decode($array, true);

        $offset = ($pageNumber - 1) * $perPage;
        $paginatedItems = array_slice($array, $offset, $perPage);

        $pageItems = new LengthAwarePaginator(
            $paginatedItems,
            count($array),
            $perPage,
            $pageNumber,
            ['path' => $url, 'query' => $query]
        );

        return $pageItems;
    }
}
