
<!DOCTYPE html>
<html>
<?php include './includes/header.php';
?>
<title>Home</title>
<h1 style="font-style: italic;font-size:50px;text-align:center">Darāmo lietu saraksts</h1>
<?php
foreach($data as $todo) {
    echo '
    <div class="card text-center">
        <div class="col align-self-center">
            <div class="container">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">'.$todo['title'].'</h5>
                        <p class="card-text">'.$todo['description'].'</p>
                        <p class="card-text">'.$todo['created_at'].'</p>
                        <a href="#" class="btn btn-primary btn-lg pull-right" style="float:right;">Labot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
}
?>
    <div class="card text-center">
        <div class="col align-self-center">
            <div class="container">
                <a href="create" method="post" action="index.php" class="input_form">
                 <button type="button" name="submit" id="add_btn" class="btn btn-secondary btn-lg pull-right" style="float:right;">Pievienot jaunu </button>
                </a>
            </div>
        </div>
    </div>
</body>
<?php include './includes/footer.php' ?>
</html>
