<section id="fau_main">
    <div class="fau_dateJour">
        <li class="date_du_jour">Date du jour <span>[</span><?php echo date('d.m.Y') ?><span>]</span></li>
    </div>
    <h3 class="fau_h3">Ajout d'un nouveau membre</h3>
    <form class="fau_form" method="POST" enctype="multipart/form-data" action="index.php?entite=admin&action=newCompte">
        <div class="fau_formContent">
            <label class="fau_label">Nom de famille: </label>
            <input class="fau_input" type="text" name="nom_user" required>
            <br><br>
            <label class="fau_label">Prénom: </label>
            <input class="fau_input" type="text" name="prenom_user" required>
            <br><br>
            <label class="fau_label">Adresse Postale: </label>
            <input class="fau_input" type="text" name="adresse_user" required>
            <br><br>
            <label class="fau_label">Email: </label>
            <input class="fau_input" type="text" name="email_user" required>
            <br><br>
            <label class="fau_label">Mot de Passe: </label>
            <input class="fau_input" type="text" name="psw_user" required>
            <br><br>
            <label class="fau_label">Numéro de téléphone: </label>
            <input class="fau_input" type="text" name="tel_user" required>
            <br><br>
            <label class="fau_label">Accès membre: </label>
            <select class="fau_select" name="categorie_user" required>
                <option value="admin">Admin</option>
                <option value="client">Client</option>
            </select>
            <br><br>
            <label class="fau_label">Type membre: </label>
            <select class="fau_select" name="type_membre" required>
                <option value="etudiant">Etudiant</option>
                <option value="professeur">Professeur</option>
                <option value="aucun">Aucun</option>
            </select>
            <br><br>
            <label class="fau_label">date de création du compte: </label>
            <input class="fau_input" type="date" name="creation_compte" required>
            <br><br>
            <button class="fau_button" type="submit">Valider</button>
        </div>
    </form>

    <div class="gm_Membre"><a href="#">Modifier Membre</a></div> <br>
    <div class="gm_Membre"><a href="#">Supprimer Membre</a></div> <br>
</section>