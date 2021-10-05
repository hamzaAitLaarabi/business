<style>
    #nav1{
       width: 100%;
       position: sticky;
       top: 0;
       z-index: 1000;
       padding: 0px;
       display: inline;
       background-color: rgb(33, 37, 41, 0.8);
     }
    .name-site{
        margin-left: 2%;
     }
    .navbar{
        background-color: #100000;
        padding-top: .2rem; 
        padding-bottom: .2rem;
     } 
    .but-nav{
        /*  */
     }
    .choix-profil{
        display: flex;
        width: 90%;
     }
    .choix{
        display: flex;
        width: 80%;
     }
    .profil{
        display: flex;
     }
    .navbar-toggler{
        padding: .10rem .30rem;
        font-size: .9rem;
        line-height: .5;
        background-color: transparent;
        border: .3px solid transparent;
        border-radius: .10rem;
        transition: box-shadow .15s ease-in-out;
     }
    .navbar-toggler:focus {
        text-decoration: none;
        outline: 0; 
        box-shadow: none;
     }
    .item-tele:hover{
        color: #f3c510;
        border-bottom: 2px solid #fff ;
     }
    .bord{
        color: #fff;
        border-right: 1px groove #f3c510;
        text-align: center;
        padding: 5px 0px;
        position: relative;
     }
    .dsign,.dsign2{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgb(33, 37, 41, 0.8);
        clip-path: circle(28.3% at 1% 100%);
     }
    .dsign2{
        clip-path: circle(28.3% at 100% 100%);
     }
    .bord:hover{
        color: #000;
        background-color: #f2f2f2;
        border-right: 1px solid #000;
        border-left: 1px solid #000;
        border-bottom-left-radius:
     }
    .link{
        width: 100%;
        text-decoration: none;     
        padding: 0 15px;
     }
    
    .prof,.sign,.login{
        text-decoration: none;
        color: #fff;
        padding: 0 5px;
     }
    .prof:hover{
        color: #fff;
     }
    .bord{
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
     }
    .bor{
        border-right: 1px solid #000;
     }
    #sign,#login{
        padding: 2px 0px; 
        margin: 0 10px;
     }
    .business::after{
        content: "$$";
        color: #f3c510;
     }

   
    /* div{
        border: 2px solid red;
        margin: 2px;
    } */
    /* span{
        border: 2px solid green;
        margin: 2px;
    } */

</style>




<nav class="navbar navbar-expand-lg navbar-dark" id="nav1">
<!-- Name site --> 
    <div class="tele">
        <div class="name-site">
            <a class="navbar-brand" style="font-family: 'Lobster', cursive;" href="/">
            <span class="business">Busine</span>
            </a>
        </div>
        <div class="case elips">
            <button class="navbar-toggler" type="button" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
        </div>  
    </div>
    <div class="tele1">
        <div class="case">
            <a href="/posts" class="navbar-brand">
                <span class="item-tele post-tel" >POST&nbsp;<i class="fa fa-address-card-o" aria-hidden="true"></i></span>
            </a>
        </div>
        <div class="case">
            <a href="/search" class="navbar-brand">
                <span class="item-tele search-tel" >SEARCH&nbsp;<i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
            </a>
        </div>
        <div class="case">
            <a href="/livreur" class="navbar-brand">
                <span class="item-tele delivery-tel" >DELIVERY&nbsp;<i class="fa fa-whatsapp" aria-hidden="true"></i></span>
            </a>
        </div>
    </div>
        
                       
       
<!-- POST SEARCH DONATE    -->
        <div class="collapse navbar-collapse choix-profil" id="navbarNavDropdown">
            <div class="choix">
                <div class="choix-1" >
                    <a  href="/">
                        <div class="bord home">
                            <div class="dsign"></div>
                            <div class="dsign2"></div>
                            <span class="link" id="home">HOME</span>  
                        </div>
                    </a>
                    <a  href="/posts" >
                        <div class="bord hd post">
                            <span class="link" id="post">POST&nbsp;</span>
                        </div>
                    </a>
                    <a href="/search" >
                        <div class="bord hd search">
                            <span class="link" id="search">SHOP&nbsp;</span>
                        </div>
                    </a>
                    <a href="/donate" >
                        <div class="bord donate">
                            <span class="link" id="donate">DONATE&nbsp;</span>
                        </div>
                    </a>
                    <a href="/livreur" >
                        <div class="bord hd delivery">
                            <span class="link" id="delivery">DELIVERY&nbsp;</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="bord">
                            <span class="link" id="save" >SAVE&nbsp;</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="bord">
                            <span class="link" id="job">JOB&nbsp;</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="bord">
                            <span class="link" id="manager">MANAGER&nbsp;</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="bord">
                            <span class="link" id="save">PRICE&nbsp;</span>
                        </div>
                    </a>
                </div>
                <div class="choix-2" >
                    <div class="bord post bord-ar">
                        <a class="link" href="/posts" id="post">البيع&nbsp;</a>
                    </div>
                    <div class="bord search bord-ar">
                        <a class="link" href="/search" id="search">الشراء&nbsp;</a>
                    </div>
                    <div class="bord donate bord-ar">
                        <a class="link" href="/donate" id="donate">المساعدات&nbsp;</a>
                    </div>
                    <div class="bord delivery bord-ar">
                        <a class="link active" href="/livreur" id="delivery">التوصيل&nbsp;</a>
                    </div>
                    <div class="bord bord-ar">
                        <a class="link" href="#" id="manager" > مستشار&nbsp;</i></a>
                    </div>
                </div>
            </div>
        
<!-- profil -->
            <div class="profil" id="navbarNavDropdown">
                @if(Session::has('user'))
                <div class="bord prof">
                    <a class="prof" href="/profil/{{ Session::get('user')['id'] }}" id="save"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;{{ Session::get('user')['name']}}&nbsp;{{ Session::get('user')['id']}}&nbsp;hamza mbidawi cvghxhg</a>
                </div>
                @else
<!-- Sign Up --> 
                <div class="bord bor">
                    <a class="link"  href="/register" id="sign">Sign Up</a>
                </div>
                <div class="bord bor">
                    <a class="link"  href="/login" id="login">Login</a>
                </div>
                @endif
             </div>   
        </div>   
</nav>
<style>

/* tele */
    @media screen and (max-width:995px){
        .choix-profil{
            display: grid;
            width: 100%;
         }
        .choix{
            width: 100%;        
            justify-content: left;
            position: relative;
         }
        .choix-1{
            margin-left:5px;
         }
        .choix-2{
            position: absolute;
            right: 5px;       
         }
        .profil{
            justify-content: center;
            margin: 10px;
         }
         .prof{
            text-align: center;
            }
        .bord{
            border-right: none;
            border-bottom: 1px solid #edeff1 ;
            text-align: left;
         }
        .bord-ar{
            text-align: right;
         }
        .bord:hover{
            border: 1px solid #000 ;
         }
        .tele{
            display: flex;
            width: 100%;
            padding: 10px 0;
            position: relative;
         }
        .tele1{
            display: flex;
            width: 100%;
            justify-content: center;
            margin-bottom: 7px;
         }
        .case{

         }
        .item-tele{
            font-size: 1rem;
            border-bottom: 2px solid #212529; 
         }
        .elips{
            position: absolute;
            right: 10px;
         }
        .hd{
            display: none;
         }
        .navbar-brand{
            margin: 0.5rem;
         }
        .bor{
            margin-right: 3px;
        }
        
     }

     /* pc */
    @media screen and (min-width:996px) and (max-width:4000px){
        #nav1{
            display: flex;
         }
        .case{
            display: none;
         }
        .choix-1{
            display: flex;

         }
        .choix{
            justify-content: center;
            width: 85%;      
         }
        .profil{
            width: 15%;
         }
        
        .tele{
            width: 9%;
         }
        .business{
            margin-left:5%;
         }
        .choix-2{
            display: none;
        }
     }
    
</style>


