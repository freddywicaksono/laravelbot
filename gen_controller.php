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
$hapus = "$".$objek."->delete();";
$temp = "";
$slash = chr(92);

$temp .="
<?php
/*
 Nama file: App\Http\Controllers$slash$cname.php
 Tools : LaravelBot
 Created By : Freddy Wicaksono, M.Kom
*/
namespace App\Http\Controllers;

use App". $slash ."Models".$slash.$model;

$temp .="
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class $cname extends Controller
{

     public function index() : view
    {
        \$data['$tbname'] = $model::orderBy('$pk','desc')->paginate(5);    
        return view('$tbname.index', \$data);
    }

      
    
    public function create() : view
    {
        return view('$tbname.create');
    }
     
    
    public function store(Request \$request) : RedirectResponse
    {
        \$request->validate([
";

        foreach ($fields as $field) {
            if($field<>$pk){
                $temp .= "          '" . $field . "' => 'required',\n";
            }          
        }  

$temp .="
        ]);
 
        $$objek = new $model; 
";
        
        foreach ($fields as $field) {
            if($field<>$pk){
                $temp .= "        $".$objek."->" . $field . " = \$request->".$field.";\n";
            } 
        }  
        
 
 $temp .="
        $simpan     
        return redirect()->route('$tbname.index')
                         ->with('success','$objek has been created successfully.');
    }
      
    
    public function show($model $$objek) : view
    {
        return view('$tbname.show',compact('$objek'));
    } 
      
    
    public function edit($model $$objek) : view
    {
        return view('$tbname.edit',compact('$objek'));
    }
     
    
    public function update(Request \$request, \$id) : RedirectResponse
    {
        \$request->validate([
";

        foreach ($fields as $field) {
            if($field<>$pk){
                $temp .= "          '" . $field . "' => 'required',\n";
            } 
                
        }  

$temp .="
        ]);
         
        $$objek = $model::find(\$id); 
";
 
        foreach ($fields as $field) {
            if($field<>$pk){
                $temp .= "        $".$objek."->" . $field . "= \$request->".$field.";\n";
            }  
        } 
 
$temp .="
        $simpan
     
        return redirect()->route('$tbname.index')
                         ->with('success','$objek Has Been updated successfully');
    }
     
    
    public function destroy($model $$objek) : RedirectResponse
    {
        $hapus    
        return redirect()->route('$tbname.index')
                        ->with('success','$objek has been deleted successfully');
    }
}

     
";

echo printCode($temp);
?>