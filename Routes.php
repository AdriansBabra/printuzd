<?php
$db = new Database();

Route::set('create', function() {
    Create::CreateView('create');
});

Route::set('edit', function() {
    Edit::CreateView('edit');
});

Route::set('main', function() {
    $index = new Index();
    $index::CreateView('index');
    $data = $index->query("SELECT * FROM data");
});


?>