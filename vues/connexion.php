<main>
    <div class="container">
        <h3>Identifiez-vous</h3>
        <form method="POST" action="index.php?entite=user&action=login">
            <?php
            if ($erreur) {
                echo '<div class="erreur">';
                echo $erreur;
                echo '</div>';
            }
            ?>
            <div class="row">
                <div class="col-25">
                    <label for="idForm">Identifiant:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="idForm" name="identifiant" placeholder="Entrez votre pseudonyme...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="mdp">Mot de passe:</label>
                </div>
                <div class="col-75">
                    <input type="password" id="mdp" name="password" placeholder="Entrez votre mot de passe...">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Validez">
            </div>
        </form>
    </div>
</main>
