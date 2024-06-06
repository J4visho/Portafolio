<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Realiza la petición a la API
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=ar&apiKey=dccd1a5bb13d4a3e9b13071d3fe83b3e');
        $data = $response->json();

        // Número de artículos por página
        $articlesPerPage =6;
        $page = $request->get('page', 1);
        $totalArticles = count($data['articles']);
        
        // Paginación manual
        $articles = array_slice($data['articles'], ($page - 1) * $articlesPerPage, $articlesPerPage);
        $paginator = new LengthAwarePaginator($articles, $totalArticles, $articlesPerPage, $page, [
            'path' => $request->url(),
            'query' => $request->query()
        ]);

        return view('news.index', [
            'articles' => $paginator
        ]);
    }
}
