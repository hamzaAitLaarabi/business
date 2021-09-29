@extends('master')
@section("home")
<br>
<div class="test">
<h1> home </h1>
</div>


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
    }       
  /* tele iPad */
  @media screen and (min-width:801px) and (min-width:800px){
    .test{
      border: 1px solid red;
      border-left: 2px solid green;
    } 


      }

</style>


@endsection