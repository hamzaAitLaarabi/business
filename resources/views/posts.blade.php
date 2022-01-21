@extends('master')
@section("posts")
<style>
    .post{
      color: #000;
      background-color: #f3c510;
     }
    #post{
        color: #000;
     }
    .post-tel{
        border-bottom: 2px solid #f3c510;
     }
    
    /* div{
            border: 2px solid red;
            margin: 2px;
        } 
    span{
        border: 2px solid green;
        margin: 2px;
    } */
</style>
<!-- ############################ les boutons ##########################  -->
    <style>
        .but1{
            background-color: #f2f2f2;
            /* box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 1px 3px 0 rgba(0, 0, 0, 0.11); */
            border-radius: 5px;
            width: 100%;
            height: auto;
            max-width: 580px ;
            min-width: 270px;
            margin-top: 20px;
        }
        .but2{
            width: 100%;
            display: grid;
            border-radius: 5px;
            padding: 1px;
        }
        .fi1,.fi2,.fi3,.fi4,.fi5,.fi6,.fi7,.fi8,.fi9{
            width: 100%;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            position: relative;
        }
        .bouton{
            width: 20%;
            margin: 0 2%;
            border-radius: 8px;
            display: grid;
            place-items: center;
            background-color: #fff;
            color: #4d94ff;
            border: 1px solid #fff;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 1px 3px 0 rgba(0, 0, 0, 0.11);
            font-weight: bold;
            cursor: pointer;
            transition: 1s;
        }
        .bouton:hover {
            background-color: #f3c510;
            color: #212529;
            transform: scale(1.03);
            letter-spacing: 2px;
        }
        .icon,.titl{
            width:96%;
            height: auto;
            border-radius: 8px;
            display: block;
            text-align: center;
        }
        .icon{
            margin: 10px 0 5px 0;
        }       
        .titl{
            color: #212529;
            margin: 0 0 10px 0 ;
        }
        .ultras{
            position: relative;
            }
            .bullhorn{
                font-size: 2rem;
                z-index: 1;
                margin-top:30%;
            }
            .ultra{   
                font-size: 15px;
                margin:1%;
            }
            .first-5,.med-5,.last-5{
                position: absolute;
                top: 10%;
                display: flex;
                place-content: center;
                width : 100%;
                --fa-animation-duration: 3s;
                --fa-animation-delay: 1s ;
                transform: scale3d(1.1, 0.8, 1);
            }   
            .med-5{
                top: 25%;
                --fa-animation-duration: 2s;
                --fa-animation-delay: 2s;
                transform: scale3d(0.9, 0.8, 1);

            }
            .last-5{
                --fa-animation-duration: 2s;
                --fa-animation-delay: 3s;
                top: 40%;
                transform: scale3d(0.7, 0.8, 1);

            }
        @media screen and (max-width:600px){
            .bouton{
                width: 20%;
                margin: 0 2%;
                border-radius: 8px;
            }
            .icon{
                margin: 5px 0 5px 0 ;
            }
            .icon-tele{
                font-size: 1.5em;
            }  
            .titl{
                margin: 0 0 5px 0 ;
                font-size: 12px;
            }
            .fs-sm{
                font-size: 10px;
            }
            .bullhorn{
                margin-top:25%;
                font-size:15px;
                color:#212529; 
                opacity: 0.8;
            }
            .first-5,.med-5,.last-5{
                position: absolute;
                font-size:10px;
                top: 0%;
                transform: scale3d(0.8, 0.8, 1);
            }   
            .med-5{
                top: 20%;
                transform: scale3d(0.7, 0.8, 1);
            }
            .last-5{
                top: 40%;
                transform: scale3d(0.6, 0.8, 1);
            }
        }
    </style>
    <div class="but1">
        <div class="but2 fa-3x icon-tele">
            <div class="fi1">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#school">
                    <span class="icon"><i class="fas fa-graduation-cap fa-beat" style="--fa-animation-duration: 20s;"></i></span>
                    <span class="titl fs-5">SCHOOL</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#clothes">
                    <span class="icon"><i class="fa fa-tshirt  fa-beat" style="--fa-animation-duration: 25s;"></i></span>
                    <span class="titl fs-5">CLOTHES</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#novel">
                    <span class="icon"><i class="fa fa-book-open fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">NOVELS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#car" hidden>
                    <span class="icon"><i class="fa fa-car fa-beat" style="--fa-animation-duration: 35s;"></i></span>
                    <span class="titl fs-5">CARS</span>
                </div>       
            </div>
            <div class="fi2">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#phone">
                    <span class="icon"><i class="fa fa-mobile-alt fa-beat" style="--fa-animation-duration: 20s;"></i></span>
                    <span class="titl fs-5">PHONES</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#tablet">
                    <span class="icon"><i class="fa fa-tablet-alt fa-beat" style="--fa-animation-duration: 25s;"></i></span>
                    <span class="titl fs-5">TABLETS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#laptop">
                    <span class="icon"><i class="fa fa-laptop fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">LAPTOPS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#television">
                    <span class="icon"><i class="fa fa-television fa-beat" style="--fa-animation-duration: 35s;"></i></span>
                    <span class="titl fs-6 fs-sm">TELEVISIONS</span>
                </div> 
            </div>
            <div class="fi3">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#motor">
                    <span class="icon"><i class="fa fa-motorcycle fa-beat" style="--fa-animation-duration: 20s;"></i></span>
                    <span class="titl fs-5">MOTOS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#car">
                    <span class="icon"><i class="fa fa-car fa-beat" style="--fa-animation-duration: 25s;"></i></span>
                    <span class="titl fs-5">CARS</span>
                </div>       
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#truck">
                    <span class="icon"><i class="fa fa-bus fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">TRUCK</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#ship">
                    <span class="icon"><i class="fa fa-ship  fa-beat" style="--fa-animation-duration: 35s;"></i></span>
                    <span class="titl fs-5">SHIP</span>
                </div>
            </div>
            <div class="fi4">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#invest">
                    <span class="icon"><i class="fa fa-briefcase fa-beat" style="--fa-animation-duration: 20s;"></i></span>
                    <span class="titl fs-5">INVEST</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#realestate">
                    <span class="icon"><i class="fa fa-city fa-beat" style="--fa-animation-duration: 25s;"></i></span>
                    <span class="titl fs-5 fs-sm">RealEstate</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#job">
                    <span class="icon"><i class="fa fa-users-cog fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">JOBS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#wholesale">
                    <span class="icon"><i class="fa fa-globe  fa-beat" style="--fa-animation-duration: 35s;"></i></span>
                    <span class="titl fs-6">WHOLESALE</span>
                </div>
            </div>
            <div class="fi5">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#home">
                    <span class="icon"><i class="fa fa-home fa-beat" style="--fa-animation-duration: 20s;"></i></span>
                    <span class="titl fs-5">HOME</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#salon">
                    <span class="icon"><i class="fa fa-couch  fa-beat" style="--fa-animation-duration: 25s;"></i></span>
                    <span class="titl fs-6">LiveingRoom</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#kitchen">
                    <span class="icon"><i class="fa fa-utensils fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">KITCHEN</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#beauty">
                    <span class="icon"><i class="fa fa-venus fa-flip" style="--fa-animation-duration: 60s;"></i></span>
                    <span class="titl fs-5">BEAUTY</span>
                </div>
            </div>
            <div class="fi6">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#pets">
                    <span class="icon"><i class="fa fa-paw fa-fade" style="--fa-animation-duration: 25s;"></i></span>
                    <span class="titl fs-5">PETS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#cameras">
                    <span class="icon"><i class="fa fa-camera fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">CAMERAS</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#watche">
                    <span class="icon"><i class="far fa-clock fa-beat" style="--fa-animation-duration: 35s;"></i></span>
                    <span class="titl fs-5">WATCHES</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#headphone">
                    <span class="icon"><i class="fa fa-headphones fa-beat" style="--fa-animation-duration: 40s;"></i></span>
                    <span class="titl fs-6 fs-sm">HEADPHONES</span>
                </div>
            </div>
            <div class="fi7">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#gaming">
                    <span class="icon"><i class="fa fa-gamepad  fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">GAMING</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#game">
                    <span class="icon"><i class="fa-solid fa-compact-disc  fa-spin" style="--fa-animation-duration: 20s; --fa-animation-iteration-count: 1;"></i></span>
                    <span class="titl fs-5">GAMES</span>
                </div>
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#sport">
                    <span class="icon"><i class="fa fa-dumbbell fa-beat" style="--fa-animation-duration: 30s;"></i></span>
                    <span class="titl fs-5">SPORTS</span>
                </div>
                <div class="bouton ultras" data-bs-toggle="modal" data-bs-target="#ultras">
                    <span class="icon bullhorn"><i class="fa fa-bullhorn fa-flip" style="--fa-animation-duration: 2s;"></i></span>
                    <span class="titl fs-5">ULTRAS</span>
                        <div class="first-5">
                            <?php 
                                for($i=0; $i<12 ;$i++) {
                                    if($i < 4) {
                                        echo '<i class="ultra fas fa-users fa-beat" ></i>';
                                    }
                                    if($i == 4){
                                        echo '</div>
                                              <div class="med-5">';
                                    }
                                    if($i>3 && $i<8 ){
                                        echo '<i class="ultra fas fa-users fa-beat" ></i>';
                                    }
                                    if($i ==8){
                                    echo '</div>
                                          <div class="last-5">';
                                    }
                                    if($i>7 && $i<12 ){
                                        echo '<i class="ultra fas fa-users fa-beat" ></i>';
                                    }
                                }
                            ?>
                        </div>
                </div>
            </div>
            <div class="fi8">
                <div class="bouton" data-bs-toggle="modal" data-bs-target="#other">
                    <span class="icon"><i class="fa fa-plus-circle"></i></span>
                    <span class="titl fs-5">OTHER</span>
                </div>
            </div>
        </div>
    </div>
<!-- ########################### MODAL POSTS  ############################# -->
    <style>
        .cont-bg{
            width: 100%;
           
            position: relative;
            
         }
        .tags-1,.tags-2{
            background-color:;
            display: flex;
            place-content: center;
            width: 100%;
            padding-left: 2%;
            position: relative;

         }
        .tags-1{
            margin-bottom: 20px;
         }
        .tags-2{
          
         }
        .cont-sm{
            background-color:;
            border-radius: 6px;
            width: 31%;
            height: auto;
            margin-right: 2%;
            display: grid;
            place-items: center;
            
         }
        .dv-tag{
            background-color:;
            width: 98%;
            height: auto;
            margin: 10px 2%;   
         }
        .form-control{
            width: 95%;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
         }       
        .form-select{
            width: 95%;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
         } 
        
        .popover,.tooltip{
            border-radius: 5px;
            background-color:#f3c510;
         }
        .popover-body,.tooltip{
            color: #000;
            font-family: 'Cairo', sans-serif;
            font-weight: 800;
            font-size:13px;
            padding: 8px 11px;
            text-align: center;
         }
        .hov{
            transition: transform 0.5s;
         }
        .hov:hover{
            transform: scale(1.5);
         }
        .bs-popover-top>.popover-arrow::after{
            border-top-color: #f3c510;
         }
        .tag-1,.tag-1{
            
         }
        .tag-1,.tag-1{
            
         }
        .tag-1,.tag-1{
            
         }
        .tag-1,.tag-1{
            
         }
        .tag-1,.tag-1{
            
         }
        .tag-1,.tag-1{
            
         }
        .tag-1,.tag-1{
            
         }
    </style>
<!-- ########################### MODAL SCHOOL ############################# -->
<div class="modal fade" id="school" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">SCHOOL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cont-bg">
                    <div class="tags-1">
                        <div class="cont-sm">
                            <div class="dv-tag">
                                <label for="city" class="form-label">City&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="يمكنك النشر على مستوى الجهة يتم التوصيل بين جميع النواحي"><i class="far text-muted fa-question-circle fs-13 fa-flip" style="animation-duration: 10s"></i></span>
                                <select name="city" id="city" type="text"  class="shadow-sm p-2 form-select" aria-label="Default select example" dir="auto" required>
                                    <option selected value="Casablanca">Casablanca</option>
                                        <option value="CASABLANCA" >raba</option>
                                        <option value="CASABLANCA" >marakech</option>
                                </select> 
                            </div>
                            <div class="dv-tag">
                                <label for="type" class="form-label">Type&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content=" .حدد نوع المنشور بيع، طلب شراء، تبادل، مجاني"><i class="far text-muted fa-question-circle fs-13 hov"></i></span>
                                <select name="type" id="type" type="text"  class="shadow-sm p-2 form-select" aria-label="Default select example" dir="auto" required>
                                    <option selected value="vente">Vente</option>
                                        <option value="achat" >Achat</option>
                                        <option value="reprise" >Reprise</option>
                                        <option value="gratuit" >Gratuit</option>
                                </select> 
                            </div>
                            <div class="dv-tag">
                                <label for="level" class="form-label">Level&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="حدد المستوى الدراسي"><i class="far text-muted fa-question-circle fs-13 hov"></i></span>
                                <select name="level" id="level" type="text"  class="shadow-sm p-2 form-select" aria-label="Default select example" dir="auto" required>
                                        <option selected value="1ere Primaire" >1ère Primaire</option>
                                </select> 
                            </div>
                        </div>
                        <div class="cont-sm">
                            <div class="dv-tag">
                                <label for="education" class="form-label">Education&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="حدد نوع التعليم عمومي خصوصي"><i class="far text-muted fa-question-circle fs-13 hov"></i></span>
                                <select name="###" id="education" type="text"  class="shadow-sm p-2 form-select" aria-label="Default select example" dir="auto" required>
                                    <option selected value="public">Public</option>
                                    <option value="privee">Privée</option>
                                </select> 
                            </div>
                            <div class="dv-tag">
                                <label for="branch" class="form-label">Branch&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="حدد الفرع الشعبة أو المسلك"><i class="far text-muted fa-question-circle fs-13"></i></span>
                                <input name="###" type="text" class="shadow-sm p-2 form-control" id="branch" list="datalistOptions" type="text" placeholder="Type to search..." dir="auto">
                                    <datalist id="datalistOptions">
                                        <option value="Tronc Commun">
                                    </datalist>  
                            </div>
                            <div class="dv-tag">
                                <label for="option" class="form-label">Option&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="حدد الإختيار عربي فرنسي إنجليزي"><i class="far text-muted fa-question-circle fs-13"></i></span>
                                <select name="###" type="text" class="shadow-sm p-2 form-select" id="option" aria-label="Default select example" dir="auto" required>
                                    <option selected value="Arabe">ARABE</option>
                                    <option value="biof">BIOF</option>
                                    <option value="english">ENGLISH</option>
                                </select>   
                            </div>
                        </div>
                        <div class="cont-sm">
                            <div class="dv-tag">
                                <label for="tag_7" class="form-label">Tag&nbsp;7&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="حدد نوع الباقة كتب(مقررات دراسية)، دفاتر الدروس بخط اليد، كتب و دفاتر، أو باقة الكترونية كاملة"><i class="far text-muted fa-question-circle fs-13"></i></span>
                                <select name="###" type="text" class="shadow-sm p-2 form-select" id="tag_7" aria-label="Default select example" dir="auto">
                                    <option selected value="Livres">Livres</option>
                                    <option value="Cahiers">Cahiers de cours</option>
                                    <option value="Livres et Cahiers">Livres et Cahiers</option>
                                    <option value="pdf">PDF</option>
                                </select>   
                            </div>
                            <div class="dv-tag">
                                <label for="option" class="form-label">Tag&nbsp;8&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content=" حدد الحالة مستعملة جديدة "><i class="far text-muted fa-question-circle fs-13"></i></span>
                                <select name="###" type="text" class="shadow-sm p-2 form-select" id="option" aria-label="Default select example" dir="auto">
                                    <option selected value="utilisés">Utilisés</option>
                                    <option value="neuf">Neuf</option>
                                </select>   
                            </div>
                            <div class="dv-tag">
                                <label for="option" class="form-label">Tag&nbsp;9&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="حدد الإختيار عربي فرنسي إنجليزي"><i class="far text-muted fa-question-circle fs-13"></i></span>
                                <select name="###" type="text" class="shadow-sm p-2 form-select" id="option" aria-label="Default select example" dir="auto">
                                    <option selected value="Arabe">ARABE</option>
                                    <option value="BIOF">BIOF</option>
                                    <option value="English">ENGLISH</option>
                                </select>   
                            </div>
                        </div>
                        
                    </div>
                    <div class="tags-2">
                        <div class="cont-sm">
                            <div class="dv-tag desc">

                            </div>
                        </div>
                        <div class="cont-sm">
                            <div class="dv-tag photo">

                            </div>
                            <div class="dv-tag vedio">

                            </div>
                        </div>
                        <div class="cont-sm">
                            <div class="dv-tag price">

                            </div>
                            <div class="dv-tag auction">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div>hamza</div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">POST</button>
            </div>
        </div>
    </div>
</div>


    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->
    <!-- ########################### MODAL  ############################# -->




<!-- #############################  les champs ########################  -->
    <div class="les-champs">
        <div class="pere-1">
            <div class="fils-1">
                <form action="/AddPost" method="POST" enctype="multipart/form-data" >
                    @csrf
<!-- city -->
                    <div class="champ">
                        <select name="city" id="city"  class="form-select" aria-label="Default select example" required>
                        <option selected value="" disabled>Ville</option>
                            <option value="CASABLANCA" >CASABLANCA</option>
                            <input name=""  class="shadow-sm  form-control" list="datalistOptions" type="text" id="city" placeholder="Type to search..." >
                            
                        </select>
                        <small class="oblig" style="margin-left: 10px;font-size:12px;">(champ obligatoire)</small>
                    </div>
<!-- niveau scolaire -->
                    <div class="champ">  
                        <select name="niveau" id="niveau" class="form-select" aria-label="Default select example">
                            <option selected value="" disabled>Niveau scolaire</option>
                            <option value="1ére anner">1ére anner</option>
                            <option value="2éme annee">2éme année</option>
                        </select>
                    </div>
<!-- bublic/privée -->
                    <div class="champ">
                        <select name="pub_pre" id="pub_pre" class="form-select" aria-label="Default select example">
                            <option selected value="" disabled>Public/Privée</option>
                            <option value="Public">Public</option>
                            <option value="Privée">Privée</option>
                        </select>
                    </div>
<!-- hr -->
                    <div class="champ">
                        <hr style="width: 80%;margin: auto;">
                    </div>           
<!-- filieres -->
                    <div class="champ">
                        <select name="filieres" id="filieres" class="form-select" aria-label="Default select example">
                            <option selected value="" disabled>FILIERES</option>
                            <optgroup label="Tronc Commun">
                                <option value="Sciences">Sciences</option>
                                <option value="Technologies">Technologies</option>
                                <option value="Lettres et Sciences Humaines">Lettres et Sciences Humaines</option>
                        </select>
                    </div> 
<!-- langue arabe/biof -->
                    <div class="champ">
                        <select name="langue" id="langue" class="form-select" aria-label="Default select example">
                            <option selected value="" disabled>Arabe/Biof</option>
                            <option value="ARABE">ARABE</option>
                            <option value="BIOF">BIOF</option>
                        </select>
                    </div>

<!-- hr -->
                    <div class="champ">
                        <hr style="width: 80%;margin: auto;">
                    </div>  
<!-- Type d'annonce -->
                    <div class="champ">
                        <div><h6 class="">Type d'annonce</h6></div>
                        <div style="margin-left: 20px;">
                            <div class="form-check form-switch">
                                <input name="type" value="vente" class="form-check-input" type="radio" id="vent">
                                <label class="form-check-label" for="vent">Vent</label>
                            </div>
                            <div class="form-check form-switch">
                                <input name="type" value="demande" class="form-check-input" type="radio" id="bon">
                                <label class="form-check-label" for="bon">Bon de commande</label>
                            </div>
                        </div>
                    </div>
<!-- hr -->
                    <div class="champ" >
                        <hr style="width: 80%;margin: auto;">
                    </div> 
<!-- photo -->
                    <div class="champ">
                    <span><h6 class="">Ajouter une image</h6></span> 

                        <img src="{{asset('assets\photos\file.png')}}" onClick="triggerClick()" id="postDisplay" style="width:20%;height: auto; margin-left:5%;margin-top:2%;border-radius:8px;">
                        <input type="file" name="image" onChange="displayImage(this)" id="postImage" class="form-control" accept="image/*" style="display: none;" >
                            
                    </div>
<!-- hr -->
                    <div class="champ" >
                        <hr style="width: 80%;margin: auto;">
                    </div> 
<!-- prix -->
                    <div class="" style="width:50%;margin-left:5%;margin-top:2%">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Prix</span>
                            <span class="input-group-text">DHs</span>
                            <input name="prix" type="text" id="prix" placeholder="0" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" maxlength="15">
                        </div>
                    </div>
<!-- description --> 
                    <div class="form-floating" style="margin-left: 20px;margin-top: 10px;margin-right: 20px;">
                        <textarea name="description" class="form-control shadow" placeholder="Leave a comment here" id="description" maxlength="200" style="height: 100px;border-radius: 7px;  " required></textarea>
                        <label for="description">description</label>
                        <small class="oblig" style="margin-left: 10px;font-size:12px;">(champ obligatoire)</small>
                    </div>

<!-- button -->       
                    <div class="text-center" style="margin: 10px;">
                        <button class="btn btn-primary btn-md" type="submit" name="" >poster annonce</button>
                    </div>
                </form>
            </div>
        </div>
 </div><br>
<!-- #############################  les annonces ########################  -->

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
                        @if ($post->tag_2)
                            <span class="tag">
                                {{ "#".$post->tag_2 }}</span>
                             @endif
                        @if ($post->tag_3)
                            <span class="tag">
                                {{ "#".$post->tag_3 }}</span>
                             @endif
                    </div>
                    <div class="f1-f3-f2">
                        @if ($post->tag_4)
                            <span class="tag">
                                {{ "#".$post->tag_4 }}</span>
                             @endif
                        @if ($post->tag_5)
                            <span class="tag">
                                {{ "#".$post->tag_5 }}</span>
                             @endif
                        @if ($post->type == "vente")
                            <span class="tag">
                                {{ "#".$post->type }}</span>
                        @elseif($post->type)
                            <span class="tag" style="background-color:#f3c510;color: #000;">{{ "#".$post->type }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="f2">
<!-- description -->
                <div  class="f2-f1">
                    <p dir="auto" class="p-description">{{ $post->description }}</p>
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
                        <strong class="prix">{{ $post->prix }}&nbsp;DH</strong>                      
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
                                    <i style="color: rgb(0, 0, 0);" class="fa fa-ellipsis dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true" > 
                                    <i style="color: #000" class="fa fa-ellipsis" aria-hidden="true">xx</i>     
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




@endsection