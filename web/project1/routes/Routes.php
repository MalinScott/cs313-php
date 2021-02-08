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


?>