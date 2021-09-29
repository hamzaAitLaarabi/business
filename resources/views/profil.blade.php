@extends('master')
@section("profil")

<!-- #################### css ######################## -->
<style>
    .bord{
        border-bottom: 2px solid #f3c510 ;
    }
    @import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap');
    a{
        color: #fff;
        text-decoration: none;
    }
    /* grand-pere */
        .grand-pere{
            background-color:yellow;     
            display: flex;
            width: 100%;
        }
        /* pere-left */
            .pere-left{
                background-color: #f3c510;
                width: 20%;
            }
        /* pere-right */
            .pere-right{
                background-color: green;
                width: 100%;
            }
                /* fils */
                    .fils{
                        width: 100%;
                    }
                    /* fils-1 */
                        .fil-1{
                            background-color:purple;
                            height: 300px;
                            width: 100%;
                            position: relative;                   
                        }
                            /* cover */
                                .cover{
                                    background-color: #ff99cc;
                                    height: 250px;
                                    width:100%; 
                                }
                            /* cover-name */
                                .cover-name{
                                        background-color: rgb(255, 51, 153);
                                        position: absolute;
                                        width: 100%;
                                        top:25%;
                                    }
                                    /* nom */
                                        .nom{          
                                            text-align: center;
                                        }
                                            /* name */
                                                .name{
                                                    padding-top: 20px;
                                                    max-width: 100%;
                                                    overflow: hidden;
                                                    white-space: nowrap;
                                                    text-overflow: ellipsis;
                                                    color: #fff;
                                                    font-size: 2rem;
                                                    -webkit-font-smoothing: antialiased;
                                                    -moz-osx-font-smoothing: grayscale;
                                                    font-family: 'Black Han Sans', sans-serif;
                                                    line-height: 1.1; 
                                                }
                            /* cover-photo */
                                .cover-photo{
                                    background-color: #e1ff66;
                                    height: 45%;
                                    width:12%;
                                    position: absolute;
                                    top: 55%;
                                    left: 44%;
                                    border-radius:100%;
                                }
                                    /* photo */
                                        .photo{
                                            background-color: rgb(0, 102, 255);
                                            width: 90%;
                                            height: 90%;
                                            margin: 5%;
                                            border-radius:100%;
                                        }
                                        /* logo */
                                            .logo{
                                                width: 100%;
                                                height: 100%;
                                                border-radius:100%;
                                            }
                                            .logo-write{
                                                background-color: #212529;
                                                width: 100%;
                                                height: 100%;
                                                border-radius:100%;
                                                display: flex;
                                                place-items: center;
                                                justify-content: center;
                                            }
                                                /* bs */
                                                .BS{
                                                        color: #fff;
                                                        font-size: 2.5rem;                                                    
                                                        font-family: 'Roboto', sans-serif;
                                                        line-height: 1.1; 
                                                        font-weight: bold; 
                                                    }
                                                    .BS::after{
                                                        content: "$$";
                                                        color: #f3c510;
                                                }
                            /* cover-edit */
                                .cover-edit{
                                    
                                }
                        /* fil-2 */
                            .fil-2{
                                background-color: #cc00cc;
                            }
                            /* cover-2-1 */
                                .cover-2-1{
                                    background-color: rgb(255, 51, 153);
                                    display: flex;   
                                }
                                /* mes-annonces ,mes-dons ,panier */
                                    .mes-annonces ,.mes-dons ,.panier{
                                        margin-left: 20px;
                                    }
                            /* cover-2-2  */
                                .cover-2-2{
                                    background-color: rgb(255, 51, 153);
                                    display: grid;
                                    place-items: center;
                                }   

    /* div,span{
        margin: 2px;
        border: 3px solid #ff8d00;
    } */
</style>

<!-- #################### PROFIL ######################## -->

<!-- grand-pere -->
    <div class="grand-pere">
<!-- pere-left -->
        <div class="d-none d-lg-block pere-left">
            <div class="childs">
                pere-left
            </div>
        </div>
<!-- pere-right -->
        <div class="pere-right">
            <div class="fils">
                <div class="fil-1">
                    <div class="cover">
                    </div>
                    <div class="cover-name">
                            <div class="nom">
                                <h1 class="name">{{ $user['name'] }} {{ $user['id'] }}</h1>
                            </div>
                        </div>
                    <div class="cover-photo">                      
                        <div class="photo">
                            <!-- <img class="logo" src="{{ asset('assets/photos/logo.png')}}" alt=""> -->
                            <div class="logo-write">
                                <h2 class="BS">B</h2>
                            </div>
                        </div>
                    </div>
                    <div dir="rtl" class="cover-edit">
                        <span><a href="#">Modifier le profil <i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a></span>                               
                    </div>
                </div>
                <div class="fil-2">
                    <div class="cover-2-1">
                        <div class="mes-annonces">
                            <a href="/profil/{{ $user['id'] }}/annonces"><span class="annonces">Annonces</span></a>                                
                        </div>
                        <div class="mes-dons">
                            <a href="/profil/{{ $user['id'] }}/panier"><span class="pan">Panier</span></a>
                        </div>
                        <div class="panier">
                            <a href="/profil/{{ $user['id'] }}/don"><span class="don">Don</span></a>
                        </div>                  
                    </div>
                    <div class="cover-2-2">
                        @yield("profils/annonces")
                        @yield("profils/panier")
                        @yield("profils/don")
                    </div>
                </div>
            </div>
        </div>
    </div>














@endsection