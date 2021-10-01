<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets\css\css.css') }}">
    
    <title>TEST</title>
    <style>

@media screen and (max-width:800px){
  }
 .con{
   
    background-color: cyan;
    height: 100vh;
 }
 .popover-body,.popover,.tooltip,em{
    background-color:red;
    color:orange;
    font-size:10px;
 }
</style>
</head>
<body class="con">
    

<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>" data-bs-content="content popover">Dismissible popover</a>


<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
  Tooltip with HTML
</button>


<!-- form select  -->
                            <div class="dv-tag">
                                <label for="###" class="form-label">###&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="يمكنك البيع على مستوى الجهة يتم التوصيل بين جميع النواحي"><i class="far text-muted fa-question-circle fs-13 hov"></i></span>
                                <select name="###" id="###" type="text"  class="shadow-sm p-2 form-select" aria-label="Default select example" dir="auto" required>
                                    <option selected value="#">#</option>
                                        <option value="#" ></option>
                                        <option value="#" ></option>
                                </select> 
                            </div>
<!-- form datalist -->
                            <div class="dv-tag">
                                <label for="###" class="form-label">Cit&nbsp;</label><span class="cp" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="يمكنك البيع على مستوى الجهة يتم التوصيل لجميع النواحي"><i class="far text-muted fa-question-circle fs-13"></i></span>
                                <input name="" type="text" class="shadow-sm p-2 form-control" list="datalistOptions" type="text" id="###" placeholder="Type to search..." dir="auto">
                                    <datalist id="datalistOptions">
                                        <option value="#">
                                        <option value="#">
                                    </datalist>  
                            </div>





<script  src="{{ asset('assets\js\bootstrap.js') }}"></script>
<script  src="{{ asset('assets\js\popper.min.js') }}"></script>




<script>
   
    </script>
   
    





<!-- ####################### image ########################## -->
  <!-- <div style="width=50%;margin-top:40vh;">
        <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
                <div class="text-center img-placeholder"  onClick="triggerClick()">
                    <h4>Update image</h4>
                </div>
                <img src="{{asset('assets\photos\BS1.png')}}" width="50px" onClick="triggerClick()" id="profileDisplay">
              
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
        </div>
  </div> -->
<!-- photo upload -->
<script>
                function triggerClick(e) {
            document.querySelector('#profileImage').click();
            }
            function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
            }

</script>




        




    

</body>
</html>




