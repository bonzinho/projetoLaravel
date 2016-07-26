<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'content',
    ];

     public function comments(){

    	return $this->hasMany('App\Comment'); // define que o posts podem ter vários comentários
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag', 'posts_tags');
    }

    public function getTagListAttribute(){ // o nome get e attribute são obrigatorios ficando o nome no meio destas palavras

        $tags = $this->tags()->lists('name')->all();  // faz um array com uma lista de nomes de tags vinda da db
        
        return implode(', ', $tags); // cria uma variavel com todos os valores do array separado por virgulas
    }
    
}
