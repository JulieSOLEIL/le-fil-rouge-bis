    <section class="container">
        <h2>Inscrivez-vous</h2>
        <div class="content">
            <form method="POST" action="index.php?entite=user&action=newCompte">
                <div class="category-details">
                    <div class="top">
                        <input type="radio" name="subtitle" id="dot-1">
                        <input type="radio" name="subtitle" id="dot-2">
                        <div class="category">
                            <h3>Catégorie membre:</h3>
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="subtitle">Etudiant</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot "></span>
                                <span class="subtitle">Professeur</span>
                            </label>
                        </div>
                    </div>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nom:</span>
                            <input type="text" placeholder="Entrer votre nom" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Prénom:</span>
                            <input type="text" placeholder="Entrer votre prenom" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Téléphone:</span>
                            <input type="text" placeholder="Entrer votre numero de téléphone" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email:</span>
                            <input type="email" placeholder="Entrer votre email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Mot de passe:</span>
                            <input type="password" placeholder="Entrer votre mot de passe" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirmer votre mot de passe:</span>
                            <input type="password" placeholder="Confirmer votre mot de passe" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Numéro adresse:</span>
                            <input type="text" placeholder="Entrer votre numéro de voie" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Voie adresse:</span>
                            <input type="text" placeholder="Entrer votre nom de voie" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Code postale:</span>
                            <input type="text" placeholder="Entrer votre code postale" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Ville:</span>
                            <input type="text" placeholder="Entrer votre ville" required>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Valider">
                    </div>
            </form>
        </div>
    </section>