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
    <title>Laravel 10 $objek-CRUD</title>
 
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" >
</head>
<body>
 
<div class=\"container mt-2\">
 
<div class=\"row\">
        <div class=\"col-lg-12 margin-tb\">
            <div class=\"pull-left\">
                <h2>Data $objek</h2>
            </div>
            <div class=\"pull-right mb-2\">
                <a class=\"btn btn-success\" href=\"{{ route('$tbname.create') }}\"> Create $objek</a>
            </div>
        </div>
    </div>
    
    @if (\$message = Session::get('success'))
        <div class=\"alert alert-success\">
            <p>{{ \$message }}</p>
        </div>
    @endif
    
    <table class=\"table table-bordered\">
        <tr>\n";
        foreach ($fields as $field) {
            $temp .="            <th>$field</th>\n";         
        } 

$temp .="
            <th width=\"280px\">Action</th>
        </tr>
        @foreach ($tbname as $$objek)
        <tr>\n";
        foreach ($fields as $field) {
            $temp .="            <td>{{ $objek$arrow$field }}</td>\n";         
        }  

$temp .="
            <td>
                <form action=\"{{ route('$tbname.destroy',$id) }}\" method=\"Post\">
     
                    <a class=\"btn btn-primary\" href=\"{{ route('$tbname.edit',$id) }}\">Edit</a>
    
                    @csrf
                    @method('DELETE')
       
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
   
    {!! $link !!}
 
</body>
</html>
";

echo printCode($temp);