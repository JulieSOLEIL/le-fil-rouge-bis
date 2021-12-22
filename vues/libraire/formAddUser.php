<section>
    <div> 
        <li class="date_du_jour">Date du jour [<?php echo date('d.m.Y')?>]</li>
    </div>
    <h3>Ajout d'un nouveau membre</h3>
    <form method="POST" enctype="multipart/form-data" action="index.php?entite=article&action=ajoutArticle">
        <label>Nom de famille: </label>
        <input type="text" name="lastName_user">
        <br><br>
        <label>Prénom: </label>
        <input type="text" name="firstName_user">
        <br><br>
        <label>Adresse Postale: </label>
        <input type="text" name="adress_postale">
        <br><br>
        <label>Email: </label>
        <input type="text" name="email_user">
        <br><br>
        <label>Mot de Passe: </label>
        <input type="text" name="mdp_user">
        <br><br>
        <label>Numéro de téléphone: </label>
        <input type="text" name="téléphone_user">
        <br><br>
        <select>Accès membre: </select>
        <option value="cat_user1">Admin</option>
        <option value="cat_user2">Client</option>
        <br><br>
        <select>Type membre: </select>
        <option value="cat_user1">Etudiant</option>
        <option value="cat_user2">Professeur</option>
        <option value="cat_user0">Aucun</option>
        <br><br>
        <button type="submit">Valider</button>
    </form>
</section>