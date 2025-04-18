<?php include('header.php'); ?>
<?php include('connexion_db.php'); ?>
<?php include('navbar.php'); ?>
<div class="titre">
    <h2 style="text-align: center;"><span style="background-color: white; color: purple; font-weight: bold">Compos <?=$_GET['club']?></span></h2>
</div>
<div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Titulaires</th>
            <th>Remplaçants</th>
            <th>Reserve</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_GET['club'])){
                $club = $_GET['club'];
                $query = "select full_name, position, appearances_overall from joueur where current_club = $club";
                $resultat = mysqli_query($connect, $query);
                if($resultat) {
                    $titulaires = [];
                    $remplacants = [];
                    $reserve = [];
                while($row = mysqli_fetch_assoc($resultat)) {
                    if ($row['appearances_overall'] >= 25) {
                        $titulaires[] = $row['full_name'] . ' (' . $row['position'] . ')';
                    } else if ($row['appearances_overall'] >= 5 && $row['appearances_overall'] < 24) {
                        $remplacants[] = $row['full_name'] . " (" . $row['position'] . ")";
                    } else if ($row['appearances_overall'] < 5) {
                        $reserve[] = $row['full_name'] . " (" . $row['position'] . ")";
                    }
                }
        ?>
        <?php
                $nb_ligne = max(count($titulaires), count($remplacants), count($reserve));
                for($i = 0; $i < $nb_ligne; $i++){
        ?>
                <tr>
                    <td><?=$titulaires[$i] ?? ''?></td>
                    <td><?=$remplacants[$i] ?? ''?></td>
                    <td><?=$reserve[$i] ?? ''?></td>
                </tr>
        <?php
                }
                } else {
                
                    die("Erreur de connexion");
                }
            }   
        ?>
    </tbody>
</table>
</div>

<?php include('footer.php'); ?>