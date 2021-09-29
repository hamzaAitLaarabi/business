@extends('master')
@section("login")



    <div style="width: 400px;margin-top:10px;" >
        <form action="login" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">               
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email')}}" required>
                @if ($message = Session::get('mp-in'))
                    <div class="input-group" style="margin-top:1%;margin-left:3%;">
                        <span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $message }}</span>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required value="{{ old('password')}}">
                    @if ($message = Session::get('em-in'))
                        <div class="input-group" style="margin-top:1%;margin-left:3%;">
                            <span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $message }}</span>
                        </div>
                    @endif
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Login</button>
            <br>          
        </form>
    </div>


<style>
 .error{
            color: #dd3c49;
            font-size: 0.8em;
            width:90%;
        }
</style>
<script>
</script>
@endsection