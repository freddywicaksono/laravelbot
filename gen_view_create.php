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
$temp ="";
$temp .="
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Add $classname Form - Laravel 10 CRUD</title>
 
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" >
</head>
<body>
 
<div class=\"container mt-2\">
   
<div class=\"row\">
    <div class=\"col-lg-12 margin-tb\">
        <div class=\"pull-left mb-2\">
            <h2>Add $objek</h2>
        </div>
        <div class=\"pull-right\">
            <a class=\"btn btn-primary\" href=\"{{ route('$tbname.index') }}\"> Back</a>
        </div>
    </div>
</div>
    
  @if(session('status'))
    <div class=\"alert alert-success mb-1 mt-1\">
        {{ session('status') }}
    </div>
  @endif
    
<form action=\"{{ route('$tbname.store') }}\" method=\"POST\" enctype=\"multipart/form-data\">
    @csrf
   
    <div class=\"row\">";

    foreach ($fields as $field) {
        $tipe = getColumnType($conn,$dbname,$tbname,$field);
        if($tipe=="enum"){
            $temp .="
            <div class=\"col-xs-12 col-sm-12 col-md-12\">
                <div class=\"form-group\">
                    <strong>Program Studi:</strong>
                    <select name=\"$field\">
                        <option value=\"\">--pilih $field--</option>\n";

                        $val=getEnumValues($conn,$dbname,$tbname,$field);
                        foreach($val as $item){
                            $temp .= "                        <option value=\"$item\">$item</option>\n";
                            
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
                    <input type=\"text\" name=\"$field\" class=\"form-control\" placeholder=\"$field\">
                    @error('$field')
                    <div class=\"alert alert-danger mt-1 mb-1\">{{ \$message }}</div>
                    @enderror
                </div>
            </div>";
        }
        $temp .="";         
    }

$temp .="
        <button type=\"submit\" class=\"btn btn-primary ml-3\">Submit</button>
    </div>
    
</form>
 
</body>
</html>";

echo printCode($temp);