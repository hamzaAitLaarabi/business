<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Donat;
use App\Models\Panier;
use App\Models\Users;
use App\Models\Livreur;
use Session;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    public function AddPost(Request $req)
    {
       
        // validation inputed from
        $req->validate([
            'city'            =>'required',
            'description'     =>'required|max:250',
            'prix'            => 'max:15',
        ]);

        if($req->session()->has('user'))
        {
            
            if($req->hasFile('image')){
                $newImageName = time() . '-' . $req->session()->get('user')['id'] . '.' . $req->image->extension();
                $image = $req->image->move(public_path('assets\images'),$newImageName);
            }else{ $newImageName= NULL;}           
            $post = new Posts;        
            $post->city        = $req->input('city');
            $post->tag_2       = $req->input('pub_pre');
            $post->tag_3       = $req->input('niveau');
            $post->tag_4       = $req->input('langue');
            $post->tag_5       = $req->input('filieres');
            $post->description = $req->input('description');           
            $post->prix        = $req->input('prix');
            $post->type        = $req->input('type');
            $post->image_path  = $newImageName;
            $post->usr_name    = $req->session()->get('user')['name'];
            $post->phone       = $req->session()->get('user')['phone'];          
            $post->email       = $req->session()->get('user')['email'];
            $post->usr_id      = $req->session()->get('user')['id'];
            $post->save();
            return redirect("/posts#p2");
        }
        else
        {
            return redirect("/login");
        }

    }
    public function add_donate(Request $req)
    {
        // validation inputed from
        $req->validate([
            'city'        =>'required',
            'genre_donate'=>'required',
            'des_donate'  =>'required|max:250',
        ]);

        if($req->session()->has('user'))
        {   
            if($req->hasFile('image_donate')){
                $newImageName = time() . '-' . $req->session()->get('user')['id'] . '.' . $req->image_donate->extension();
                $image = $req->image_donate->move(public_path('assets\images'),$newImageName);
            }else{ $newImageName= NULL;} 
            $donate = new Donat;
            $donate->city             = $req->input('city');       
            $donate->genre_donate     = $req->input('genre_donate');
            $donate->des_donate       = $req->input('des_donate');                             
            $donate->image_path       = $newImageName;
            $donate->phone            = $req->session()->get('user')['phone']; 
            $donate->usr_name         = $req->session()->get('user')['name'];
            $donate->email            = $req->session()->get('user')['email'];
            $donate->usr_id           = $req->session()->get('user')['id'];
            $donate->save();
            return redirect("/donate");
        }
        else
        {
            return redirect("/login");
        }
    }
    public function add_to_cart($id)
    {
        if(Session::has('user'))
        { 
            $cart = new Panier;        
            $cart->usr_id   = Session::get('user')['id'];
            $cart->post_id  = $id;
            $cart->save();
            return redirect("/posts#post_$id");
        }
        else
        {
            return redirect("/login");
        }

    }
    public function add_commande(Request $req)
    {
        if(Session::has('user'))
        { 
            $livreur = new Livreur;        
            $livreur->usr_id    = Session::get('user')['id'];
            $livreur->name      = $req->input('name');
            $livreur->prix      = $req->input('prix_commande');
            $livreur->a_sender  = $req->input('a_sender');
            $livreur->a_reciver = $req->input('a_reciver');
            $livreur->commande  = $req->input('commande');
            $livreur->save();
            return redirect("/");
        }
        else
        {
            return redirect("/login");
        }

    }
    public function profil($id) 
    {
        if(session()->has('user'))
        {
       /*  $usrID = Session::get('user')['id']; */
        $anonnces = DB::table('posts')
        ->orderBy('id','desc')
        ->join('users', 'users.id','=', 'posts.usr_id')
        ->where('posts.usr_id',$id)
        ->select('posts.*')
        ->get();
        $donate = DB::table('donat')
        ->orderBy('id','desc')
        ->join('users', 'users.id','=', 'donat.usr_id')
        ->where('donat.usr_id',$id)
        ->select('donat.*')
        ->get();
        $user = Users::find($id);            
            if($user){
                return view('profil',[
                    'anonnces'=>$anonnces,
                    'donate'=>$donate,
                    'user'=>$user,        
                    ]);
        
            }else{return redirect('code:404');} 
        }
        else
        {
            return redirect("/login");
        }    
    }
    /* Annonces Panier Don */
        public function annonces($id)
        {
            $user = Users::find($id);
            if($user){
                $posts = Posts::Usr_id($id)->get();
                return view('profils/annonces',[
                    "posts"=>$posts,
                    'user'=>$user,
                ]);
            }else{return redirect('code:404');}    
        }
        public function panier($id)
        {
            $user = Users::find($id);
            if($user){
                $posts = DB::table('posts')
                ->orderBy('id','desc')
                ->join('panier', 'panier.post_id','=', 'posts.id')
                ->where('panier.usr_id',$id)
                ->select('posts.*')
                ->get();
                return view('profils/panier',[
                    "posts"=>$posts,
                    'user'=>$user,
                ]);
            }else{return redirect('code:404');} 
        }
        public function don($id)
        {
            $user = Users::find($id);            
            if($user){
                $posts = Donat::Usr_id($id)->get();
                return view('profils/don',[
                    "posts"=>$posts,
                    'user'=>$user,        
                    ]);
            }else{return redirect('code:404');} 
        }
    public function posts()
    {
        $posts = Posts::orderBy('id','desc')->get();
        $posts =[];
        return view('posts',["posts"=>$posts]);
    }
    public function delet_Anonn($id)
    {
        if(session()->has('user'))
        {
            $usrID = Session::get('user')['id'];
            $usr_id = Posts::find($id)["usr_id"];    

                if($usrID == $usr_id)
                {        
                Posts::destroy($id);
                return redirect("/profil/$usr_id");
                }
                else
                {
                return redirect("code:404");
                }
        }
        else 
        {
            return redirect("login");
        }
        
    }
    public function search(Request $req)
    {
        $posts = DB::table('posts')->orderBy('id','desc')->get();

        if($req->filled('city')){
           $posts = $posts->where('city', $req->city);
        }
        if($req->filled('pub_pre')){
           $posts = $posts->where('pub_pre', $req->pub_pre);
        }
        if($req->filled('niveau')){
           $posts = $posts->where('niveau', $req->niveau);
        }
        if($req->filled('filieres')){
           $posts = $posts->where('filieres', $req->filieres);
        }
        if($req->filled('langue')){
           $posts = $posts->where('langue', $req->langue);
        }
        if($req->filled('type')){
           $posts = $posts->where('type', $req->type);
        }
       
        return view('search',["posts"=>$posts]);

       
    }
   
    
}
