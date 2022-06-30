<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Http::get('https://newsapi.org/v2/top-headlines', [
            'country' => 'ph',
            // 'category' => 'technology',
            // 'pageSize' => 20,
            'apiKey' => Config::get('services.newsapi.key'),
        ])->json()['articles'];

        $articles = array_map(function ($article) {
            return [
                'source' => $article['source']['name'],
                'title' => substr($article['title'], 0, strrpos($article['title'], '-')),
                'author' => $article['author'] ?? 'Anonymous',
                'description' => $article['description'],
                'url' => $article['url'],
                'thumbnail' => $article['urlToImage'] ?? 'image/default.jpg',
                'publishedAt' => Carbon::parse($article['publishedAt'])->diffForHumans(),
            ];
        }, $articles);

        return view('home', compact('articles'));
    }

    public function showCategory($category)
    {
        // array of categories
        $categories = [ 'business', 'entertainment', 'general', 'health', 'science', 'sports', 'technology' ];

        //check if $category is in $categories
        if (!in_array($category, $categories)) {
            abort(404);
        }

        $articles = Http::get('https://newsapi.org/v2/top-headlines', [
            'country' => 'ph',
            'category' => $category,
            // 'pageSize' => 20,
            'apiKey' => Config::get('services.newsapi.key'),
        ])->json()['articles'];

        // create new array with only the required fields
        $articles = array_map(function ($article) {
            return [
                'source' => $article['source']['name'],
                'title' => substr($article['title'], 0, strrpos( $article['title'], '-') ),
                'author' => $article['author'] ?? 'Anonymous',
                'description' => $article['description'],
                'url' => $article['url'],
                'thumbnail' => $article['urlToImage'] ?? 'image/default.jpg',
                'publishedAt' => Carbon::parse($article['publishedAt'])->diffForHumans(),
            ];
        }, $articles);

        return view('category', compact('articles'))->with('category', $category);
    }
}
