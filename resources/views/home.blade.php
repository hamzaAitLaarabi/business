@extends('master')
@section("home")
<br>
<div class="test">
<h1> home </h1>
</div>

<br>


<style>
  .home{
    color: #000;
    background-color: #f3c510;
  }
  #home{
    color: #000;
  }
  .test{
      border: 1px solid red;
      border-right: 2px solid green;
      transform: scale3d(1, 1, 10);
    }       
    /* tele iPad */
    @media screen and (min-width:801px) and (min-width:800px){
      .test{
        border: 1px solid red;
        border-left: 2px solid green;
      }     
      }
      .icon{
      transform: scale(0.1, 0.5);
      color: red;
      }
    </style>

<h1><i class="fa fa-scroll fa-3x fa-spin icon" style="--fa-flip-x: 1; --fa-flip-y: 0;" ></i></h1>

@endsection