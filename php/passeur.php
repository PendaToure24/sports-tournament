<?php include('header.php'); ?>
<?php include('connexion_db.php'); ?>
<?php include('navbar.php'); ?>

<h1 style="text-align: center;"><span style="background-color: white; color: purple; font-weight: bold">Meilleurs Passeurs</span></h1>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Position</th>
            <th>Club</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Nationalité</th>
            <th>Nombre de passes</th>
            <th>Nombre de match</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $query = "select Current_Club, full_name, age, nationality, assists_overall, appearances_overall from joueur order by assists_overall desc limit 10";
                $resultat = mysqli_query($connect, $query);
                if($resultat)
                {
                    $pos = 1;
                while($row = mysqli_fetch_assoc($resultat))
                {
        ?>
                    <tr>
                        <td><?=$pos?></td>
                        <td><?=$row['Current_Club']?> <img src="../images/<?=$row['Current_Club']?>.png" width="25"></td>
                        <td><?=$row['full_name']?></td>
                        <td><?=$row['age']?></td>
                        <td><?=$row['nationality']?></td>
                        <td><?=$row['assists_overall']?></td>
                        <td><?=$row['appearances_overall']?></td>
                    </tr>
        <?php $pos++;
                }
                }
                else
                {
                    die("Erreur de connexion");
                }
        ?>
    </tbody>
</table>
<?php include('footer.php'); ?>