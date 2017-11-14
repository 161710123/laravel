<?php
//route basic (dasar)

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
return '<h1>Hallo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});
Route::get('user/{name}', function($a){
 return 'Nama Saya Adalah '.$a.'<b>';
 });
 Route::get('/about/{id}', function($a){
 return 'Hallo  ini halaman about <b>'.$a.'</b>';
 });	
 Route::get('/kantin/{M}/{Dika}/{Fadlan}', function($a,$b,$c){
return 'Saya Pesan Makan <b>'.$a.'</b><br>'
	   .'Minumnya <b>'.$b.'</b><br>'
	   .'Tambah Cemilan <b>'.$c.'</b>';
});	
Route::get('user/{name?}', function($name = 'Dadang Cornelo'){
 return ' <b>'.$name.'</b>';
 });