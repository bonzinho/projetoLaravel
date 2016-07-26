<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
//use App\Http\Requests;
use App\Http\Requests\PostRequest; // usar o Request criado para validação de campos e outros como tipo de acesso



class PostsAdminController extends Controller
{

	public function __construct(Post $post)
	{
		$this->post = $post; // construtor para poder usar $this->post->all() por exemplo;
	}

    public function index(){

    	//$posts = $this->post->all(); // get de todos os posts 
    	$posts = $this->post->paginate(5); // faz um get de todos os posts e pagina com 5 posts de cada vez

    	return view('admin.posts.index', compact('posts'));

    }

    public function create(){
    	return view('admin.posts.create');
    }

    public function store(PostRequest $request){   

       
        $post = $this->post->create($request->all()); //cria o post       
        $post->tags()->sync($this->getTagsIDs($request->tags)); // as tags existirem ele nao faz nada se nao existir ele cria a tag

    	return redirect()->route('admin.posts.index'); //redireciona para o route admin.posts.index
    }

    public function edit($id){ // recebe um id do post a ser editado

        $post = $this->post->find($id);

        return view('admin.posts.edit', compact('post'));

    }

    public function update($id, PostRequest $request){

        $this->post->find($id)->update($request->all());
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsIDs($request->tags)); // as tags existirem ele nao faz nada se nao existir ele cria a tag
       
        return redirect()->route('admin.posts.index'); //redireciona para o route admin.posts.index

    }

    public function destroy($id){
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index'); //redireciona para o route admin.posts.index

    }

    private function getTagsIDs($tags){

        $tagsLists = array_filter(array_map('trim', explode(',', $tags))); // cria um array com as tags inseridas na caixa de texto, palavras separadas pela virgula, o array map faz com que sejam retirados os espaços do inicio e do fim de cada posição do array isto porque estou a usar o "trim"
        $tagsIDs = [];
        foreach ($tagsLists as $tagName) {
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id; // verifica se a tag com o nome existe na base de dados se existir pega o id
        }

        //dd($tagsIDs);
        return $tagsIDs;

    }
}
