Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index'); //ganti semua route PegawaiDB
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah'); //PR Tambahin edit save sama delete
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');