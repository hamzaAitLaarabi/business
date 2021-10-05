<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
.bg,body {
    
   /*  background-image: url("{{asset('assets/photos/register.png')}}"); */
            background-size : 100% ;
            repeat : no-repeat;
    /* background-image:linear-gradient(to right, green , white); */
    background-color: white;
   
}
 .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
    
}
.font{
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
}
        .create{
            color:#8c8c8c;
            
            width:80% ;
            padding: 0px;
            border-radius: 5px;
            margin-left: 11%;
            opacity: 0.8;
        }
        .error{
            color: #dd3c49;
            font-size: 0.8em;
            width:%;
        }
    </style>
</head>
<body>
<div class="card bg" >
<article class="card-body mx-auto" style="max-width: 400px;">
    <div class="create bg-light">
    <h4 class="card-title mt-3 text-center" style="padding: 5px;">Create Account</h4>
    </div>
	<p class="text-center" style="color:#8c8c8c">Get started with your free account</p>
	
	<p class="divider-text">
        <span class="bg-light">UP</span>
    </p>
	<form action="/register" method="POST" enctype="multipart/form-data" >
    @csrf
<!-- form-group// name -->
	    <div class="form-group input-group ">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="name" class="form-control" placeholder="Full name" type="text" value="{{ old('name')}}" maxlength="20" >
                @foreach ($errors->get('name') as $error)
                    <div class="input-group" style="margin-top:1%;margin-left:3%;">
                            <span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $error }}</span>
                    </div>
                @endforeach
        </div>
<!-- form-group// email -->
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		    </div>
             <input name="email" class="form-control" value="{{ old('email')}}" placeholder="Email address" type="email" maxlength="50" >
             @foreach ($errors->get('email') as $error)
                    <div class="input-group" style="margin-top:1%;margin-left:3%;">
                            <span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $error }}</span>
                    </div>
                @endforeach
        </div> 
<!-- form-group// phon -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
    	    <input name="phone" class="form-control" value="{{ old('phone')}}" placeholder="+212 0 00 00 00 00" maxlength="18" type="tel">
            @foreach ($errors->get('phone') as $error)
                    <div class="input-group" style="margin-top:1%;margin-left:3%;">
                            <span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $error }}</span>
                    </div>
                @endforeach
        </div> 
<!-- form-group// password -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input id="password" name="password" class="form-control" placeholder="Create password" type="password">
            @foreach ($errors->get('password') as $error)
                    <div class="input-group" style="margin-top:1%;margin-left:3%;">
                            <span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $error }}</span>
                    </div>
            @endforeach
        </div>
 <!-- form-group// Cpassword -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" id="Cpassword" name="Cpassword" value="{{ old('Cpassword')}}" placeholder="Repeat password" type="password">
        </div> 
<!-- form-group// submit -->                                         
        <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
         </div>       
        <p class="text-center" style="color:white;">Have an account? <a href="/login" style="color:#007bf;">Log In</a> </p>                                                                 
        </form>
</article>
<marquee id="marquee" behavior="" direction="right"> <img src="{{asset('assets/photos/livreur.png')}}"  alt="logoLivreur" style="width: 100px;"/></marquee>
</div> 

</body>
</html>