<main class="main_connex">
    <div class="container_connex">
        <h3 class="h3_connex">Identifiez-vous</h3>
        <form method="POST" action="index.php?entite=user&action=login">
            <?php
            if ($erreur) {
                echo '<div class="erreur">';
                echo $erreur;
                echo '</div>';
            }
            ?>
            <div class="row_connex">
                <div class="col-25">
                    <label class="label_connex" for="idForm">Identifiant:</label>
                </div>
                <div class="col-75">
                    <input class="input_connex" type="text" id="idForm" name="email_user" placeholder="Entrez votre email...">
                </div>
            </div>
            <div class="row_connex">
                <div class="col-25">
                    <label class="label_connex" for="mdp">Mot de passe:</label>
                </div>
                <div class="col-75">
                    <input class="input_connex" type="password" id="mdp" name="password" placeholder="Entrez votre mot de passe...">
                </div>
            </div>
            <div class="row_connex_submit">
                <input class="input_connex_submit" type="submit" value="Validez">
            </div>
        </form>
    </div>
</main>
