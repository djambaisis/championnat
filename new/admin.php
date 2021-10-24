<?php
//session_start();

?>
<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>

    <div class="container" style="margin-right:10px;margin-left:60px;margin-top:50px;max-width:2000px;">
        <h3>ADMINISTRATION ET DEROULEMENT DU JEUX</h3>
        <div class="row" style="margin-top:5%">
            <div class="col-3 bg-white" style="height:250px;margin-right:39px">
                <br>
                <center><h4>Ajouter ou supprimer un but</h4></center><br>
                <p></p>
                <center><input type="number" name="but" class="btn btn-outline-primary btn-small"> </center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div>
            <div class="col-3 bg-white" style="height:250px;margin-right:39px">
                <br>
                <center><h4>Ajouter un  tir</h4></center><br>
                <p></p>
                <center> <input type="number" name="tir" class="btn btn-outline-primary btn-small"> </center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div>
            <div class="col-3 bg-white" style="height:250px;margin-right:39px">
                <br>
                <center><h4>ajouter une faute</h4></center><br>
                <p></p>
                <center> <input type="number" name="faute" class="btn btn-outline-primary btn-small"> </center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div><br>
        </div>

        <div class="row" style="margin-top:5%">
        <div class="col-3 bg-white" style="height:250px;margin-right:39px">
                <br>
                <center><h4>ajourter un corner</h4></center><br>
                <p></p>
                <center> <input type="number" name="corner"  class="btn btn-outline-primary btn-small"></center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div>
            <div class="col-3 bg-white" style="height:250px;margin-right:39px"
                <br>
                <center><h4>Ajouter un hors jeux</h4></center><br>
                <p></p>
                <center> <input type="number" name="hors"  class="btn btn-outline-primary btn-small"> </center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div>
            <div class="col-3 bg-white" style="height:250px;margin-right:39px">
                <br>
                <center><h4>Ajouter ou supprimer un carton jaune</h4></center><br>
                <p></p>
                <center> <input type="number" name="jaune"  class="btn btn-outline-primary btn-small"> </center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div>
            </div>
            <div class="row" style="margin-top:5%">
            <div class="col-3 bg-white" style="height:250px;margin-right:39px">
                <br>
                <center><h4>Ajouter ou supprimer un carton rouge</h4></center><br>
                <p></p>
                <center> <input type="number" name="rouge"  class="btn btn-outline-primary btn-small"> </center>
                <center> <a href="couran.php" class="btn btn-outline-primary btn-small">confirmer</a> </center>
            </div>
          <div>
        </div>

    </body>
</html>