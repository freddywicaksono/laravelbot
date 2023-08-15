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
$temp = "";
$temp .="
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class $model extends Model
{
    protected \$table = '$tbname';    
    public \$timestamps = false;
    protected \$fillable = [";

$i=0;
foreach ($fields as $field) {
    if($i<$total-1){
        if($field<>$pk){
            $temp .= "'" . $field . "'" . ","; 
        }
        
    } else {
        $temp .= "'" .$field . "'";
    }  
    $i++; 
}       

$temp .="];

}

";



echo printCode($temp);
?>