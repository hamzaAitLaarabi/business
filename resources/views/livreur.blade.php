@extends("master")
@section("livreur")
<style>
    .delivery{
      color: #000;
      background-color: #f3c510;
        }
    #delivery{
        color: #000;
        }
    .delivery-tel{
        border-bottom: 2px solid #f3c510;
     }
</style>

<div class="pere">
<!--############################## LEFT ############################ -->
    <div class="d-none d-lg-block left-1">
        <div class="left-1-1"> <h1> Livraison </h1> </div>
       
            <div class="left-1-1-2"><h5><a href="#commande" id="hcommande" >Commande</a></h5></div>
            <div class="left-1-1-3"><h5><a href="#pharmacie" id="hpharmacie">Pharmacy</a></h5></div>
           
            
  
    </div>
<!--############################## CENTER COMMANDE ############################ -->
    <div class="center-1" >
        <div class="center-2">
            <div class="center-2-1">
                <form action="add_commande" method="POST" enctype="multipart/form-data">
                    @csrf
<!-- title -->
                    <div class="center-2-1-1" id="commande">
                        <h2>Commande</h2>
                    </div>
<!-- NOM -->
                    <div class="center-2-1-2">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Nom</span>
                            <input dir="auto" type="text" name="name" class="form-control nom" id="nom" placeholder="الإسم الكامل" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
<!-- sender -->
                    <div class="center-2-1-3">
                        <div class="input-grou">
                            <label for="adresse1" class="form-label">Adresse du vendeur :</label>
                            <input dir="auto" type="text" name="a_sender"  class="form-control" id="adresse1" placeholder=" عنوان البائع : جهة، مدينة، حي " aria-describedby="emailHelp" maxlength="200">
                            <div dir="rtl" id="emailHelp" class="form-text" style="margin-right: 10px;"> مثال : جهة طنجة تطوان الحسيمة ،طنجة، بني مكادة القديمة</div>
                        </div>
                    </div>
<!-- receiver -->
                    <div class="center-2-1-4">
                        <div class="input-grou">
                            <label for="adresse2" class="form-label">Adresse de l'acheteur :</label>
                            <input dir="auto" type="text" name="a_reciver" class="form-control" id="adresse2" placeholder=" عنوان المشتري : جهة، مدينة، حي " aria-describedby="emailHelp"  maxlength="200">
                            <div dir="ltr" id="emailHelp" class="form-text" style="margin-left: 10px;">Ex : Casablanca-Settat, Casablanca, 2-Mars</div>     
                        </div>
                    </div>
<!-- type l'article -->
                    <div class="center-2-1-5">
                        <div class="input-grou">
                            <label for="type" class="form-label">Type de l'article :</label>
                            <input dir="auto" type="text" name="commande"  class="form-control" id="type" placeholder=" ... نوع العنصر : كتب، هاتف، أواني، ملابس، دراجة نارية " aria-describedby="emailHelp">
                            <div dir="rtl" id="emailHelp" class="form-text" style="margin-right: 10px;"> في حالة الهاتف أو الحاسوب يمكنك الذهاب مع الموزع</div>
                        </div>
                    </div>
<!-- prix commande -->
                    <div class="center-2-1-6">
                        <label for="prix_commande" class="form-label">Prix de l'article :</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroup-sizing-default">DHs</span>
                            <input type="number" name="prix_commande" class="form-control" id="prix_commande" placeholder="ثمن العنصر المتفق عليه بين البائع و المشتري" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
                        </div>
                        <div dir="ltr" id="emailHelp" class="form-text" style="margin-left: 10px;">Prix convenu</div>
                    </div>
<!-- send whatsApp -->
                    <div class="center-2-1-7">
                        <div class="bn-commande">
                             <button type="submit" class="btn bn_cmd"><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>

            </div>

<!--############################## CENTER Pharmacy ############################ -->
            <div class="center-2-2">
 <!-- pharmacie -->
                <div class="center-2-2-1" id="pharmacie">
                    <h2>Pharmacie</h2>
                    <div class="logo-pharmacie">
                        <img src="{{ asset('assets\photos\pharmaci.png')}}" width="30" height="auto"alt="">
                    </div>   
                </div>
<!-- Nom -->
                <div class="center-2-2-2">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1" style="padding-right:33px;">Nom</span>
                        <input type="text" class="form-control" placeholder="الإسم الكامل" aria-label="Username" aria-describedby="basic-addon1" >
                    </div>
                </div>
<!-- Adresse -->
                <div class="center-2-2-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Adresse</span>
                        <input type="text" class="form-control" placeholder=" العنوان : جهة، مدينة، حي " aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
<!-- Médicament -->
                <div class="center-2-2-4">
                    <div class="input-grou">
                        <label for="exampleInputEmail1" class="form-label">Médicament :</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="إسم الدواء">
                    </div>
                </div>
<!-- button pharmaci -->
                <div class="center-2-1-5">
                        <div class="bn-pharmacie">
                             <button type="submit" class="btn bn_phmc"><i class="fa fa-medkit fa-2x" aria-hidden="true"></i></button>
                        </div>
                </div>
            </div>
        </div>
    </div>   
</div>

<style>

   
        #hcommande,#hpharmacie{
                    text-decoration: none;
                    color: black;
                    }
        .input-group,.input-grou{
                    width: 95%;       
                    }
        input::placeholder {
            text-align: right;
            font-size: 15px;
            }
        label{
            font-size: 20px;
                 }

        *,input[type="text"]{
            direction: auto;
             }

        .pere{
            display: flex;
            background-image:linear-gradient(to bottom, #fff , #f2f2f2);
            width: 100%;
            position: relative;
            
            }   
       
        .center-1{
            width: 100%;
            max-width: 600px ;                          
            }       
        /* commande */
        .center-2-1-1{ 
            margin-top: 60px; 
            margin-bottom: 4%;             
            }
        /* les champs */
        .center-2-1-2,.center-2-1-3,.center-2-1-4,.center-2-1-5,.center-2-1-6,.center-2-1-7{ 
            margin-top: 3%;
            margin-left: 5%;                  
            }
        .center-2-1,.center-2-2,.center-2-3{
            margin-left: 3%;
            }
        .bn-commande{
               
                width:100%;
                display: grid;
                place-items: center;
                 }
        .btn{
            width:20%;
            }                        
        h2::before{
                content:"#";
                color: #f3c510;
                    }
        .bn_cmd,.bn_phmc{
            background-color: #e9ecef;
            }
        .bn_cmd:hover,.bn_phmc:hover{
            background-color: #d3d9df;
            }   

/* ################### PHARMACI ####################################################################*/
        .center-2-2{
           
            position: relative;
            margin-top: 15%;
                }
        .logo-pharmacie{
            position: absolute;
            top: 6px;
            left: 30%;
            }
        .center-2-2-1{
            margin-bottom: 4%; 
            }
        .center-2-2-2,.center-2-2-3,.center-2-2-4,.center-2-2-5{
            margin-top: 3%;
            margin-left: 5%;   
            }   
        .bn-pharmacie{
                
                width:100%;
                display: grid;
                place-items: center;
                    }
        .logo-pharm{
            width:30px;
            }
        

/* ############ div left ########################################################################## */  
        .left-1{
            background-image:linear-gradient(to bottom, #f7f7fb , #f2f2f2);
            width: 20%;
            }

        .left-1-1{
            margin-top: 50px;
            margin-left: 5%;                 
            }
        .left-1-1-2,.left-1-1-3,.left-1-1-4{
            margin-top: 10px;
            margin-left: 10%;

            }
        #hpharmacie:hover {
            color: green;
            border: 1px solid;
            
            }
        #hcommande:hover {
                            border: 1px solid;
                            
                            }
/* ########################## phone/tab ################################ */

@media screen and (max-width:600px){

    .form-control {
                    display: block;
                    width: 100%;
                    padding: .175rem .55rem;
                    font-size: 1rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #ffffffed;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    border-radius: .20rem;
                    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                            }
    .input-group-text {
                    display: flex;
                    align-items: center;
                    padding: .275rem .55rem;
                    font-size: 1rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    text-align: center;
                    white-space: nowrap;
                    background-color: #e9ecef;
                    border: 1px solid #ced4da;
                    border-radius: .25rem;
                }
    input::placeholder {           
            text-align: right;
            font-size: 13px;
            }
    label{
        font-size:1rem;
        }
    #emailHelp{
        font-size:0.7rem;
        }
    .logo-pharmacie{
        display: none;
    }




  }


   
</style>
<script>

</script>


@endsection("livreur")