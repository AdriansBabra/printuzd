<!DOCTYPE html>
<html>
<?php include './includes/header.php'; ?>
<title>Pievienošana</title>
<h1 style="font-style: italic;font-size:50px;text-align:center">Darāmo lietu saraksts</h1>
</div>
<h4 style="text-align:center;">Pievienot jaunu </h4>
<div class="row justify-content-center">
    <form action="create" class="text-center border border-light p-5" method="POST">
         <div class="form-group">
         <label>Virsraksts</label>
         <input type="text" name="title" class="form-control mb-4" size="25" value="Virsraksts">
         </div>
    <div class="form-group">
    <label>Apraksts</label>
    <input type="text" name="description" class="form-control mb-4" size="100" value="Apraksts">
    </div>
    <div class="form-group">
        <button onclick="href='Index.php';" type="submit" href="index.php" name="pievienot" class="btn btn-primary">Pievienot </button>
    </div>
        <a href="main" method="post" action="create" class="input_form">
             <button type="button" name="submit" id="add_btn" class="btn btn-secondary">Doties atpakaļ </button>
        </a>
    </form>
</div>
</body>
<?php include './includes/footer.php' ?>
</html>