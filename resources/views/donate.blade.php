@extends('master')
@section('donate')
<style>
    .donate{
      color: #000;
      background-color: #f3c510;
        }
    #donate{
        color: #000;
        }
</style>


<div class="donat" dir="rtl">
    <div class="b-donat">
        <img class="img-don" src="{{asset('assets\photos\girl-donate.jpg')}}" alt="">
        <div class="btn-don">
            <button class="btn btn-sm btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                تبرع الآن
            </button>
        </div>
    </div>
        <div class="collapse" id="collapseExample">     
            <div class="donat-1">
                <form action="/add_donate" method="POST" enctype="multipart/form-data" >
                @csrf
        <!-- genre donate -->        
                    <div class="champ-1">
                        <select dir="rtl" name="genre_donate" id="genre_donate"  class="form-select" aria-label="Default select example" required>
                            <option selected value="" disabled>نوع المنشور</option>
                            <option value="1">تبرع</option>
                            <option value="0">طلب مساعدة</option>
                            
                        </select>
                        <small style="margin-right: 30px;">(حقل اجباري)</small>
                    </div>
        <!-- city -->        
                    <div class="champ-1">
                        <select dir="rtl" name="city" id="genre_donate"  class="form-select" aria-label="Default select example" required>
                            <option selected value="" disabled>مدينتك</option>
                            <option value="CASABLANCA">CASABLANCA</option>
                            <option value="RABA">RABA</option>
                            
                        </select>
                        <small style="margin-right: 30px;">(حقل اجباري)</small>
                    </div>
        <!-- photo -->
                    <div class="champ-2" style="display: grid;place-items: right;">
                        <h6 class="h6">أضف صورة</h6>                        
                        <img src="{{asset('assets\photos\file.png')}}" onClick="triggerClick()" id="postDisplay" style="width:20%;height: auto; margin-left:5%;margin-top:2%;border-radius:8px;">
                        <input type="file" name="image_donate" onChange="displayImage(this)" id="postImage" class="form-control" style="display: none;">
                    </div>
        <!-- description donate -->
                    <div class="champ-3">
                        <h6 class=""> أكتب شيئا</h6>
                        <div class="form-floating" style="margin: 10px;margin-right: 0;">           
                            <textarea dir="auto" name="des_donate" type="text"  class="form-control" placeholder="Leave a comment here" id="des_donate" maxlength="200" style="height: 100px;border-radius: 7px;" required></textarea>
                        </div>
                    </div>
                    
        <!-- button --> 
                    <center>
                        <div class="champ-4">
                            <div class="text-center" style="margin: 15px;width:25%">
                                <button style="width:100%" class="btn btn-primary btn-md" type="submit" name="">نشر</button>
                            </div>
                        </div>
                    </center>                       
                </form>
            </div>
        </div> 
</div>


<style>

    .donat{
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 1px 3px 0 rgba(0, 0, 0, 0.11); 
        margin-top: 20px;
        width: 100%;
        padding: 10px;
        max-width: 580px ;
        min-width: 200px;
    }
        .b-donat{
            display: grid;
            place-items: center;
            position: relative;
        }
            .btn-don{
                position: absolute;
                width: 20%;
                right: 10%;
                bottom: 10%;

            }
            .img-don{
                    z-index: ;
                    width: 100%;
                    height: auto;
            }

   }
   textarea[type="text"]{
       
       font-size:18px;
   }
   small::after{
       content: "*";
       color :red;
   }
   .champ-1,.champ-2,.champ-3,.champ-4{
       margin-top:15px;
       margin-right:1%;
   }
   .h6{
       margin-right:1%;
   }
   .form-select{
        font-size:17px;
        font-weight:500;
   }  
   
  
</style>



@endsection