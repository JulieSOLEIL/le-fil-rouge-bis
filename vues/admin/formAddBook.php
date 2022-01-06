<section>
    <div>
        <li class="date_du_jour">Date du jour [<?php echo date('d.m.Y') ?>]</li>
    </div>
    <h3>Ajout d'un nouvel ouvrage</h3>
    <form method="POST" enctype="multipart/form-data" action="index.php?entite=article&action=ajoutArticle">
        <label>Photo de l'ouvrage </label>
        <input type="file" name="photo">
        <br><br>
        <label>Nom de l'ouvrage </label>
        <input type="text" name="libelle">
        <br><br>
        <label>Date de parution </label>
        <input type="date" name="date">
        <br><br>
        <label>Disponibilité </label>
        <input type="text" name="dispo">
        <br><br>
        <label>Auteur de l'ouvrage </label>
        <input type="text" name="nomAuteur">
        <br><br>
        <label>Collection de l'ouvrage </label>
        <input type="text" name="nomCollection">
        <br><br>
        <label>Edition de l'ouvrage</label>
        <input type="text" name="nomEditeur">
        <br><br>
        <button type="submit">Valider</button>
    </form>
</section>