@extends('master')
@section("search")
<style>
    .search{
      color: #000;
      background-color: #f3c510;
        }
    #search{
        color: #000;
    }
    .search-tel{
        border-bottom: 2px solid #f3c510;
    }
</style>
<div style="background-color: #f0f2f5;">
<br>

<div class="container-fluid">
  <form action="/search" method="GET" style="padding: 20px;">
        @csrf
    <div class="row">
        <div class="col-4">
<!-- city -->
            <div style="margin: 10px;">
               <select name="city" id="city" style="padding: 10px;" class="form-select" aria-label="Default select example">
                    <option selected value="" class="option">Ville</option>
                    <option value="CASABLANCA" >CASABLANCA</option>
                    <option value="RABA">RABA</option>
                    <option value="MARACKECH">MARACKECH</option>
                    <option value="AGADIR">AGADIR</option>
                </select>
            </div></div>
        <div class="col-4">
<!-- bublic/privée -->
            <div style="margin: 10px;">
                <select name="pub_pre" id="pub_pre" class="form-select" aria-label="Default select example">
                    <option selected value="" class="option">Public/Privée</option>
                    <option value="Public">Public</option>
                    <option value="Privée">Privée</option>
                </select>
            </div>
        </div>
        <div class="col-4">
<!-- niveau scolaire -->
            <div style="margin: 10px;">
                <select name="niveau" id="niveau" class="form-select" aria-label="Default select example">
                    <option selected value="" class="option">Niveau Scolaire</option>
                    <option value="1ére anner">1ére anner</option>
                    <option value="2éme annee">2éme année</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
<!-- filieres -->
            <div style="margin: 10px;">
                <select name="filieres" id="filieres" class="form-select" aria-label="Default select example">
                    <option selected value="" class="option">filieres</option>
                    <optgroup label="Tronc Commun">
                        <option value="Sciences">Sciences</option>
                        <option value="Technologies">Technologies</option>
                        <option value="Lettres et Sciences Humaines">Lettres et Sciences Humaines</option>
                    </optgroup>
                    <optgroup label="1ère Bac">
                        <option value="">#</option>
                        <option value="">#</option>
                        <option value="">#</option>
                    </optgroup>
                    <optgroup label="2Bac">
                        <option value="">SM</option>
                        <option value="">PC</option>
                        <option value="">SVT</option>
                    </optgroup>
                    <optgroup label=" Faculté S1">
                        <option value="smia">smia</option>
                        <option value="">smpc</option>
                        <option value="">smv</option>
                        <option value="">mip</option>
                        <option value="">autre</option>
                    </optgroup>
                    <optgroup label="Faculté S3">
                        <option value="">smi</option>
                        <option value="">sma</option>
                        <option value="">smc</option>
                        <option value="">smp</option>
                        <option value="">autre</option>
                    </optgroup>
                    <optgroup label="Faculté S5">
                        <option value="">sf 3it</option>
                        <option value="">#</option>
                        <option value="">#</option>
                    </optgroup>
                </select>
            </div> </div>
        <div class="col-6">
<!-- langue arabe/biof -->
            <div style="margin: 10px;">
                <select name="langue" id="langue" class="form-select" aria-label="Default select example">
                    <option selected value="" class="option">Arabe/Biof</option>
                    <option value="ARABE">ARABE</option>
                    <option value="BIOF">BIOF</option>
                </select>
            </div>
        </div>
<!-- button -->
        <div class="text-center" style="margin: 10px;">
                <button class="btn btn-primary btn-md" type="submit" name="">Search Anonnces <i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
    </div>
    </form>
</div>



</div>




<!-- style search -->

<style>

.option{
    
}
</style>


<!-- script search -->

<script> 
</script>
@endsection