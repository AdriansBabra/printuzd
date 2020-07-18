<?php

class Controller extends Database {

    public static function CreateView($viewName, array $vars = array()){
        extract($vars);
        ob_start();
        require("./Views/$viewName.php");
        echo ob_get_clean();
    }
}
?>