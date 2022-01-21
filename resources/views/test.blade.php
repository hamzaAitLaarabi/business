<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            margin:0;
            padding:0;
            display: grid;
            min-height: 50vh;
            place-items: center;
            justify-content:center;
        }
        .form-label{
            width: 100%;
        }
        .dv-tag{
            width: 200px;
            height: 100px;
            background: cyan;
            display: grid;
            place-items: center;
            justify-content:center;
        }
        select:focus {
            border: 5px solid red;
        }
        input:focus{
            background-color:red;
            padding: 30px;
        }
        div:focus-within {
            background-color:green;
            width: 400px;
            height: 200px;
        }
    </style>
</head>
<body>
    






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

</body>
</html>




