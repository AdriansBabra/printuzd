<?php
Route::set('saraksts.php', function() {
    Saraksts::CreateView('Saraksts');
});

Route::set('pievienot.php', function() {
    pievienot::CreateView('Pievienot');
});

Route::set('labot.php', function() {
    Labot::CreateView('Labot');
});

Route::set('aboutme.php', function() {
    aboutme::CreateView('Aboutme');
});

Route::set('index.php', function() {
    Index::CreateView('Index');
});

?>