@extends('settings')
@section("settings/home")
<h1>hamza</h1>
<!-- @if ($message = Session::get('stock'))         -->
        <!-- @endif -->

<div class="div_extr">
    <div class="div_itr">
    @if ($message = Session::get('stock'))
        <div class="mb-3 submit">
            <span class="flash">
                <i class="fa fa-check-circle fa-lg" aria-hidden="true" style="color: green"></i>
                 {{ $message }}</span>
        </div>
    @endif
        <form action="/add_stock" method="POST" enctype="multipart/form-data" >
            @csrf
                <div class="mb-3">
                    <label for="stock" class="form-label">Add stock</label>
                    <input name="val" type="text" class="form-control" id="stock" placeholder="stock to db ..." >
                </div>
                <div class="mb-3 submit">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
        </form>
    </div>
</div>





<style>
    

</style>



@endsection