<?php include('header.php'); ?>
<?php include('connexion_db.php'); ?>
<?php include('navbar.php'); ?>
<div class="titre">
    <h2><span style="background-color: white; color: purple; font-weight: bold">RENCONTRES J-<?=$_GET['j']?></span></h2>
</div>
<div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Domicile</th>
            <th>Extérieur</th>
            <th>Arbitre</th>
            <th>Date</th>
            <th>Stade</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_GET['j'])){
                $game_week = (int)$_GET['j'];
                $query = "select home_team_name, away_team_name, referee, date_GMT, stadium_name from matches where Game_Week=$game_week";
                $resultat = mysqli_query($connect, $query);
                if($resultat)
                {
                while($row = mysqli_fetch_assoc($resultat))
                {
        ?>
                    <tr>
                        <td><?=$row['home_team_name']?> <img src="../images/<?=$row['home_team_name']?>.png" width="25"></td>
                        <td><?=$row['away_team_name']?> <img src="../images/<?=$row['away_team_name']?>.png" width="25"></td>
                        <td><?=$row['referee']?></td>
                        <td><?=$row['date_GMT']?></td>
                        <td><?=$row['stadium_name']?></td>
                    </tr>
        <?php
                }
                }
                else
                {
                    die("Erreur de connexion");
                }
            }   
        ?>
    </tbody>
</table>
</div>

<?php include('footer.php'); ?>