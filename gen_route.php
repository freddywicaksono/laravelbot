<?php
include_once("database.php");
include('functions.php');
include('mods.php');
$lib = new Inflector();
$sql = "SHOW TABLES";
$result = $conn->query($sql);
$result2 = $conn->query($sql);

$arrow = "->";
$temp ="";
$temp .="
<?php
/*
 Nama file: routes\web.php.php
 Tools : LaravelBot
 Created By : Freddy Wicaksono, M.Kom
*/
";

while($dt = $result2->fetch_array()) {
    $tbname = $dt[0];
    $classname = ucfirst($tbname);
    $cname = $lib->singularize($classname)."Controller";
    if($dt[0]<>"failed_jobs" && $dt[0]<>"migrations" && $dt[0]<>"password_reset_tokens" && $dt[0]<>"personal_access_tokens"){
        $temp .="use App\Http\Controllers$arrow$cname;\n";
    }

}


$temp .="
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the \"web\" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



";

while($row = $result->fetch_array()) {
    $tbname = $row[0];
    $classname = ucfirst($tbname);
    $cname = $lib->singularize($classname)."Controller";
    if($row[0]<>"failed_jobs" && $row[0]<>"migrations" && $row[0]<>"password_reset_tokens" && $row[0]<>"personal_access_tokens"){
        $temp .="Route::resource('$row[0]', $cname::class);\n";
    }

}

echo printCode($temp);