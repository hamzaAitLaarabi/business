@extends('profil')
@section('profils/don')



@foreach($posts as $post)
    <div class="p1" id="post_{{ $post->id }}">
        <div class="p2" id="p2">
            <div class="f1">
<!-- photo profil -->
                <div class="f1-f1"> 
                    <div class="f1-f1-f1">
                        
                    </div>                    
                </div>
                <div class="f1-f2">
<!-- nom user -->
                    <div class="f1-f2-f1">
                        <span class="nom">{{ $post->usr_name }}</span>
                    </div>
<!-- date published -->
                    <div class="f1-f2-f2">
                        <small class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>  12 aoùt </small>
                    </div>
                </div>
                <div class="f1-f3">
<!-- tag -->
                    <div class="f1-f3-f1">
                        <span class="tag tagcity">{{ "#".$post->city }}</span>
                        @if ($post->genre_donate == 0)
                            <span class="tag don0">مساعدة#</span>
                             @endif
                        @if ($post->genre_donate == 1)
                            <span class="tag don1">تبرع#</span>
                             @endif
                    </div>
                </div>
            </div>
            <div class="f2">
<!-- description -->
                <div  class="f2-f1">
                    <p dir="auto" class="p-description">{{ $post->des_donate }}</p>
                </div>
            </div>
<!-- photo post -->
            @if($post->image_path)
            <div class="f3">
                <div class="f3-f1">
                    <img class="photo-post" src="{{ asset('assets/images/'. $post->image_path )}}" alt="image.jpg">
                    <!-- <div class="books"><span>Book$.com</span></div> -->
                </div>
            </div>
            @endif
<!-- hr -->
            <hr style="width:80%;margin-left: 10%;margin-right: 10%;margin-top:10px;margin-bottom:10px;">
            <div class="f4">
                <div class="f4-f1">
<!-- price -->
                    <div class="f4-f1-f1">
                        <span class="prix">{{ $post->prix }}&nbsp;DH</span>                      
                    </div>
                </div>
                <div class="f4-f2">
<!-- contact us -->              
                    <div class="f4-f2-f1">
                        <span class="us"><a style="color:#075e54;" href="#"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a></span>
                    </div>
                    <div class="f4-f2-f2">
                        <span class="us"><a style="color:#b4b4b4;" href="#"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a></span>
                    </div>
                </div>
<!-- suprimer partager -->
                <div class="f4-f3">
                    <div class="f4-f3-f1">
                            <div class="dropdown">
                                    <i style="color: rgb(255, 255, 255);" class="fa fa-ellipsis-h dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true" > 
                                    <i style="color: #333333 " class="fa fa-ellipsis-h" aria-hidden="true"></i>     
                                    </i>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href=" /add_to_cart/{{ $post->id }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp; Ajouter au panier </a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-link" aria-hidden="true"></i>&nbsp; Partager le lien</a></li>
                                @if(session()->has('user'))
                                    <li><hr class="dropdown-divider"></li>
                                    @if( ($post->usr_id == session()->get('user')['id']) || session()->get('user')['role'] < 3 )
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp; Suprimer</a></li>
                                    @else
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"></i>&nbsp; ban</a></li>
                                    @endif
                                @endif
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach

<head>
<link rel="stylesheet" href="{{ asset('assets\css\posts.css') }}">
</head>
<style>
    .don1{
        color: #000;
        background-color: #f3c510; 
    }
    .don{
        background-color: #f3c510;
    }

</style>

<!-- #############################  js ########################  -->
<script src="bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>





@endsection