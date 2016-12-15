<?php

Route::group(['namespace' => 'Runsite\Laravelfilemanager\controllers', 'prefix'=>'runsite/laravel-filemanager', 'middleware' => ['web']], function() {

  Route::get('sample-ckeditor-integration', function () {
      return \Illuminate\Support\Facades\View::make('editor');
  });

  // Show LFM
  Route::get('/', ['as'=>'runsite.laravel-filemanager.show', 'uses'=>'LfmController@show']);

  // upload
  Route::any('/upload', ['as'=>'runsite.laravel-filemanager.upload', 'uses'=>'UploadController@upload']);

  // list images & files
  Route::get('/jsonimages', ['as'=>'runsite.laravel-filemanager.jsonimages', 'uses'=>'ItemsController@getImages']);
  Route::get('/jsonfiles', ['as'=>'runsite.laravel-filemanager.jsonfiles', 'uses'=>'ItemsController@getFiles']);

  // folders
  Route::get('/newfolder', ['as'=>'runsite.laravel-filemanager.newfolder', 'uses'=>'FolderController@getAddfolder']);
  Route::get('/deletefolder', ['as'=>'runsite.laravel-filemanager.deletefolder', 'uses'=>'FolderController@getDeletefolder']);
  Route::get('/folders', ['as'=>'runsite.laravel-filemanager.folders', 'uses'=>'FolderController@getFolders']);

  // crop
  Route::get('/crop', ['as'=>'runsite.laravel-filemanager.crop', 'uses'=>'CropController@getCrop']);
  Route::get('cropimage', ['as'=>'runsite.laravel-filemanager.cropimage', 'uses'=>'CropController@getCropimage']);

  // rename
  Route::get('/rename', ['as'=>'runsite.laravel-filemanager.rename', 'uses'=>'RenameController@getRename']);

  // scale/resize
  Route::get('/resize', ['as'=>'runsite.laravel-filemanager.resize', 'uses'=>'ResizeController@getResize']);
  Route::get('/doresize', ['as'=>'runsite.laravel-filemanager.doresize', 'uses'=>'ResizeController@performResize']);

  // download
  Route::get('/download', ['as'=>'runsite.laravel-filemanager.download', 'uses'=>'DownloadController@getDownload']);

  // delete
  Route::get('/delete', ['as'=>'runsite.laravel-filemanager.delete', 'uses'=>'DeleteController@getDelete']);

});
