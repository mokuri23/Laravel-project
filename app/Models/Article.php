<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleRequest;


class Article extends Model
{
    public function getList(){
        $articles = DB::table('articles')->get();

        return $articles;
    }

    public function registArticle($data){
        DB::table('articles')->insert([
            'title' => $data->title,
            'url' => $data->url,
            'comment' => $data->comment,
        ]);
    }
}
