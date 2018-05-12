<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nounous candidat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--
        http://localhost/LO07_projet/candidat.php
    -->
</head>
<body>
<img class='logo' src="img/logo.png" href="http://localhost/LO07_projet/index.html">
<div class="container" id="A">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist" id="navigation">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#Introduction">Introduction</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
        </li>
    </ul> 
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="Introduction" class="container tab-pane active"><br>
            <h3>Nounous & Moi</h3>
            <p>
            Nounous & Moi a été fondée en 2018 et a été largement saluée par les clients depuis sa création. Permettre aux clients de sélectionner leurs nounous sans quitter leur domicile et effectuer les opérations
            </p>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
    </div>
</div>

<div class="container" id="B">

</div>
<div class="container myform" id="C">
  <form method="post" name="form1" action = '#'>
    <div class="Nom form_left form_l1">
        <label for="Nom">Nom:</label>
        <input type="text" id="Nom" name="Nom" placeholder="Enter Nom" style="width:200px;">
    </div>
    <div class="Prenom form_right form_l1">
        <label for="Prenom">Prenom:</label>
        <input type="text" id="Prenom" name="Prenom" placeholder="Enter Prenom" style="width:200px;">
    </div>
    <div class="Ville form_left form_l2">
        <label for="Ville">Ville:</label>
        <input type="text" id="Ville" name="Ville" placeholder="Enter Ville" style="width:200px;">
    </div>
    <div class="Age form_right form_l2">
        <label for="Age">Age:</label>
        <input type="number" id="Age" name="Age" placeholder="Enter Age" style="width:200px;">
    </div>
    <div class="Email form_left form_l3">
        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email" placeholder="Enter Email" style="width:200px;">
    </div>
    <div class="Portable form_right form_l3">
        <label for="Portable">Portable:</label>
        <input type="number" id="Portable" name="Portable" placeholder="Portable" style="width:200px;">
    </div>

    <div class="Photo form_left form_l4">
        <label for="Photo">Photo:</label>
        <input type="file" id="Photo" name="Photo"><br/>
    </div>

    <div class="Language form_left form_l5">
        <input type="checkbox" name="Language" value="Français">Français
		<input type="checkbox" name="Language" value="Anglais">Anglais
		<input type="checkbox" name="Language" value="Allemande">Allemande
		<input type="checkbox" name="Language" value="Chinois">Chinois
    </div>    

    <div class="Presentation form_left form_l6">
        <label for="Presentation">Presentation:</label><br/>
        <textarea id="Presentation" name="Presentation" style="width: 570px;"></textarea>
    </div>
    <!--
        Expérience
        Liste des évaluations effectuées par les parents
    -->
    <div class="form_left form_l8">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </div>
  </form>
</div>

</body>
</html>