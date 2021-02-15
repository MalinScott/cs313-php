<?php

Route::set('index.php', function(){
   Index::CreateView('index');
});

Route::set('client-search', function(){
   ClientSearch::CreateView('client-search');
});

Route::set('client-list', function(){
   ClientList::CreateView('client-list');
});

Route::set('client-view', function(){
   ClientList::CreateView('client-view');
});

Route::set('client-edit', function(){
   ClientList::CreateView('client-edit');
});
Route::set('client-update', function(){
   ClientList::CreateView('client-update');
});
Route::set('client-add', function(){
   ClientList::CreateView('client-add');
});


?>