<?php
    $titre = "Prof";
    include ('../header.php');
    require ('../../controler/ctrlProf.php');
    $e = new ctrl_profs;
    $id = $_GET['id'];
    $e = ctrl_profs::setDataform($id);
    /*if (isset($_POST['submit'])) {
        $new = $_POST;
        $e = ctrl_profs::update($_POST, $id);
        echo 'successful';
    }*/
    $nom = $e['0']['nom'];
    $prenom = $e['0']['prenom'];
    $email = $e['0']['email'];
    $phone = $e['0']['telephone'];
?>

<style>
          .cta
            {
                background:linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/hero-bg.jpg") top center;
                background-size: cover;
                position: relative;
                padding: 60px 0;
            }
        #myForm {
            font-family: "Poppins", sans-serif;
            font-weight: 4000;
            font-size: 13px;
            letter-spacing: 1px;
            display : inline-block;
            padding: 8px 30px 9px 30px;
            border-radius: 50px;
            transition: 0.5s;
            border: 2px solid #fff;
            color: #fff;
        }

        input[type=text], input[type=password], input[type=email], input[type=number], input[type=date], input[type=file]{
            width: 50%;
            background : transparent;
            box-sizing: border-box;
            border: 2px solid #fff;
            transition: 0.5s;
            border-radius: 50px;
            color: #fff;
        }
    </style>
    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
    <br><br>

    <div class="text-center">
    <h3>Modifier</h3>
        </br>
    <h3><?= $e['0']['nom']." ".$e['0']['prenom']; ?></h3>
    <br><br>
    </div>
    </div>
        <fieldset>
        <div style="text-align: center; ">
            <form action="successUpdate.php?id=<?= $id;?>" method = "POST" id = "myForm">
            <div class="form-group">
                Nom <br>
                <input type="text" name="nom" id="username" size="50" class="form-control" value=<?= $nom; ?>> <br>
                <span
                style="color :rgb(240, 129, 3);font-style: italic;" id="error"> </span> </br>
                <br>
            </div>

                Prénom <br>
                <input type="text" name="prenom" size="50" id="prenom" class="form-control" value=<?= $prenom; ?>> <br>
                <span
                style="color :rgb(240, 129, 3);font-style: italic;" id="error2"> </span> </br> <br>

                Telephone <br>
                <input type="text" name="telephone" size="50" class="form-control" value=<?= $phone; ?>> <br>
                <span id="error3"> </span> </br> <br>

                Email <br>
                <input type="email" name="email" size="50" id="email" class="form-control" value=<?= $email; ?>> <br>
                <span id="error4"> </span> </br> <br>

                Genre <br>
                <input type="radio" id="male" name="genre" value="male"> <label for="male">Homme</label>
                <input type="radio" id="female" name="genre" value="female"> <label for="female">Femme</label><br>
                <button type="submit" class="btn btn-primary" name ="submit" id="submit" class="btn-get-started scrollto" value ="Enregistrer" onsubmit="validateForm()">Modifier</button>
            </form>
        </div>
    <fieldset>
    </section>
    <!-- End Cta Section -->

    <script type="text/javascript" src="form.js"> </script>
<?php require '../footer.php'; ?>