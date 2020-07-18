
<!DOCTYPE html>
<html>
<?php include './includes/header.php'; ?>
<title>Home</title>
<h1 style="font-style: italic;font-size:50px;text-align:center">Darāmo lietu saraksts</h1>
    <div class="card text-center">
        <div class="col align-self-center">
            <div class="container">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Pastaiga</h5>
                        <p class="card-text">Iziet svaigā gaisā pastaigāt</p>
                        <a href="#" class="btn btn-primary btn-lg pull-right" style="float:right;">Labot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <div class="col align-self-center">
            <div class="container">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Izdarīt kaut ko jaunu</h5>
                        <p class="card-text">Iemacīties uztaisīt šo lietu.</p>
                        <a href="#" class="btn btn-primary btn-lg pull-right" style="float:right;">Labot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--<form action="" method="POST">
    <label>Virsraksts</label>
    <input type="text" name="Virsraksts" value="Virsraksts">
    <label>Apraksts</label>
    <input type="text" name="Apraksts" value="Apraksts">
    <button type="submit" name="save">Save</button>
</form>-->
    <div class="card text-center">
        <div class="col align-self-center">
            <div class="container">
                <a href="create.php" method="post" action="index.php" class="input_form">
                 <button type="button" name="submit" id="add_btn" class="btn btn-secondary btn-lg pull-right" style="float:right;">Pievienot jaunu </button>
                </a>
            </div>
        </div>
    </div>
</body>
<?php include './includes/footer.php' ?>
</html>