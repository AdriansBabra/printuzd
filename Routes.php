<?php
$db = new Database();

Route::set('create', function() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // The request is using the POST method
        if(isset($_GET['title']))
        {
            $title = $_GET['title'];
            var_dump($title);
        }
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        Create::CreateView('create',[]);
    }

});

Route::set('edit', function() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // The request is using the POST method
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        Edit::CreateView('edit', []);
    }
});

Route::set('main', function() {
    $index = new Index();
    $data = $index->query("SELECT * FROM data");
    $index::CreateView('index',['data' => $data]);
});


?>