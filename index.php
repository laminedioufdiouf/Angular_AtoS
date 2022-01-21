
<?php 

require_once ('connect.php');
  if (isset($_POST) & !empty($_POST)) {
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $email = ($_POST['email']);
    $genre = $_POST['genre'];
    $age = $_POST['age'];

    $CreateSql = "INSERT INTO `etudiant` (first_name,   last_name, email, genre, age)  VALUES('$nom', '$prenom', '$email', '$genre', '$age') ";
    $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
    if ($res) {
      $message = "insertion reussi avec succès";
    }else{
      $erreur = "erreur d'insertion a la base";
    }
  }

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>crud app php</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >
</head>
<body>
  <?php   
    include 'navbar.php';
   ?>

  <div class="container">
    <div class="row pt-4">
      <?php if (isset($message)) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $message; ?>
        </div> <?php } ?>

        <?php if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $erreur; ?>
        </div> <?php } ?>

      <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
        <h2>Crud App de la Gestion Etudiant</h2>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Nom</label>
          <div class="col-sm-10">
            <input type="text" name="nom" placeholder="Nom" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">prenom</label>
          <div class="col-sm-10">
            <input type="text" name="prenom" placeholder="prenom" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" placeholder="e-mail" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Genre</label>
          <div class="col-sm-10">
            <label>
              <input type="radio" name="gender" id="optionsRadios" value="h" checked>
              H
            </label>
            <label>
              <input type="radio" name="gender" id="optionsRadios" value="f" checked>
              F
            </label>
            
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Age</label>
          <div class="col-sm-10">
            <select name="age" class="form-control">
              <option>Ton age</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>

            </select>
          </div>
        </div>

        <div class="pt-4">
          <input type="submit" value="submit" class="btn btn-primary m-3">
          <a href="view.php">
            <button class="btn btn-success m-3" type="button">
              voir la liste
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>