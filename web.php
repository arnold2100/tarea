<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
function fprueba($a,$b=1){
    return $a+$b;
}
class clase1{
    public $edad=13;
    private $nombre='juan';
    function __construct(){
        $this->nombre='pedro';
    }
    static public function getnombre(){return 'juancho';}
}
interface icosas{
    public function datos();
}
class clase2 extends clase1 implements icosas{
    function datos(){}
    function toString(){
        return 'nombre:'.$this->getnombre().' desde la clase';
    }
}

Route::get('/ejemplo',function(){
    print_r("hola mundo");
    clase1::getnombre();
    $a=10;
    print_r("holamundo $a");
    $p=12;
    $p='hola';
    $numero=12.1992;
    if($p>10)
        echo '<br>es mayor';
    else
        echo 'noooo';
    echo ($p>10?'<br>peque':'no muestra esto');
    for($i=0;$i<10;$i++){
        echo '<br>'.$i;
    }
    while($i<15){
        echo '<br>'.$i++;
    }
    echo fprueba(3,3);
    $c1=new clase1();
    echo '<br>nombre:'.$c1->getnombre();
    $c2=new clase2();
    echo '<br>'.$c2->toString();
});
Route::get('/dato',function(){
    return view('dato');
});
Route::get('/tareaform',function(){
    return view('form');
});
