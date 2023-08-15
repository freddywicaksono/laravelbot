<?php
include('functions.php');
include('mods.php');
$lib = new Inflector();
$tbname = $_GET['table'];
$classname = ucfirst($tbname);
$pk = getPrimaryKey($conn, $tbname);
$unik = getUnique($conn, $tbname);
$total = getTotalFields($conn, $tbname);
$fields = getAllFieldName($conn, $dbname, $tbname);
$model = $lib->singularize($classname)."Model";
$cname = $lib->singularize($classname)."Controller";
$objek = $lib->singularize($tbname);
$simpan = "$".$objek."->save();";
$link = "$".$objek."->link();";
$id="$".$objek."->id();";
$hapus = "$".$objek."->delete();";
$temp = "";
$slash = chr(92);
$arrow = "->";
$opencur = "{{";
$closecur = "}}";
$temp ="";
$temp .="
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Edit $classname Form - Laravel 10 CRUD Tutorial</title>
 
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" >
</head>
<body>
 
<div class=\"container mt-2\">
 
    <div class=\"row\">
        <div class=\"col-lg-12 margin-tb\">
            <div class=\"pull-left\">
                <h2>Edit $classname</h2>
            </div>
            <div class=\"pull-right\">
                <a class=\"btn btn-primary\" href=\"{{ route('$tbname.index') }}\" enctype=\"multipart/form-data\"> Back</a>
            </div>
        </div>
    </div>
    
  @if(session('status'))
    <div class=\"alert alert-success mb-1 mt-1\">
        {{ session('status') }}
    </div>
  @endif
   
    <form action=\"{{ route('$tbname.update',$objek->$pk) }}\" method=\"POST\" enctype=\"multipart/form-data\">
        @csrf
        @method('PUT')
    
         <div class=\"row\">";

        foreach ($fields as $field) {
            if($field<>$pk){
                $tipe = getColumnType($conn,$dbname,$tbname,$field);
                if($tipe=="enum"){
                    $temp .="
                    <div class=\"col-xs-12 col-sm-12 col-md-12\">
                        <div class=\"form-group\">
                            <strong>$field:</strong>
                            <select name=\"$field\">
                                <option value=\"{{ $objek->$field }}\" selected>$opencur$objek$arrow$field$closecur</option>\n";
        
                                $val=getEnumValues($conn,$dbname,$tbname,$field);
                                foreach($val as $item){
                                    $temp .= "                                <option value=\"$item\">$item</option>\n";
                                    
                                }
        
                    $temp .="
                            </select>@error('$field')       
                            <div class=\"alert alert-danger mt-1 mb-1\">{{ \$message }}</div>
                        @enderror
                        </div>
                    </div>";
                } else {
                    $temp .="
                    <div class=\"col-xs-12 col-sm-12 col-md-12\">
                        <div class=\"form-group\">
                            <strong>$field:</strong>
                            <input type=\"text\" name=\"$field\" value=\"{{ $objek->$field }}\" class=\"form-control\" placeholder=\"$field\">
                            @error('$field')
                            <div class=\"alert alert-danger mt-1 mb-1\">{{ \$message }}</div>
                            @enderror
                        </div>
                    </div>";
                }
            }
                     
        }

$temp .="
            <button type=\"submit\" class=\"btn btn-primary ml-3\">Submit</button>
           
        </div>
    
    </form>
</div>
 
</body>
</html>";

echo printCode($temp);