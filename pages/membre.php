<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque de L'Inconnu</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/membre.css">
    <script src="https://kit.fontawesome.com/c19fce56fe.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include '../pages/header.php';
    ?>
<main>  
    <section class="info">
        <div>
            <h2>Devenir membre</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quasi voluptatibus eligendi, consectetur, ipsum tempore nihil dignissimos illo veniam quam nulla itaque eaque dolore molestias voluptate? Adipisci, doloribus natus? Accusantium.
            Iure facilis blanditiis sequi, magni voluptatem sed reprehenderit aliquam culpa soluta ducimus suscipit dolores optio cumque cum repellat, unde quo nemo eligendi labore ad voluptatum porro. Quis facilis inventore non?
            Soluta sint unde repudiandae nostrum itaque corporis animi ut, veniam exercitationem suscipit doloribus reiciendis culpa accusamus tempore laborum minus voluptatibus hic dolores, enim nisi id illum adipisci. Eos, voluptatibus qui.
            Aliquid eum laudantium aspernatur dolorem dolor inventore natus odio eius saepe! Quaerat, inventore soluta magni quisquam porro natus in fugiat, quas aspernatur, dignissimos architecto repellendus ducimus at animi explicabo odit!
            Labore cumque, eos eveniet sed aperiam accusantium cum aliquid libero sunt architecto dignissimos ad excepturi autem sint facere vero corrupti modi ipsum dolorem illum nobis voluptates similique? Impedit, facilis optio.</p><br>
        </div>
        <div class="image"> 
            <img src="/images/img_library05.jpg" alt="library">
        </div>     
        <div>
            <h2>Les benefices</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, minus, asperiores culpa similique, laborum amet vel dignissimos adipisci iste eveniet ullam non temporibus! Praesentium adipisci, fugit officia blanditiis dolorum minima?
            Eaque, perferendis unde molestias et necessitatibus quia. Minima iure magni qui aliquam vel accusantium fugiat facere explicabo eaque voluptate officiis, provident cumque illum? Ducimus maxime nulla in, a vero nostrum.
            Qui odio, repellat reprehenderit distinctio sed inventore nesciunt. Maxime magnam recusandae a optio natus minima, itaque provident quaerat eum dolores quod modi dicta, consequatur aperiam culpa labore illum quia. Saepe?
            Quaerat, ducimus. Corrupti praesentium soluta velit deserunt aperiam. Similique odio illum veniam laboriosam dignissimos beatae tempora in, ab fuga. Quos eius velit dolores ratione aliquid quidem aut fugit cum nam.
            Itaque accusamus, cum dolorem accusantium reprehenderit facilis unde in nobis dolor quisquam. Saepe voluptate commodi blanditiis suscipit ipsa, dignissimos consequuntur perferendis error labore, fuga ea officiis dolor itaque, perspiciatis adipisci.
            Ullam nihil maxime veniam, animi praesentium provident cumque eaque qui ab sapiente quos tenetur eveniet voluptas deserunt nemo sit aliquid. Animi nemo minus, aspernatur quisquam fuga numquam ipsum sed mollitia.</p>
        </div>
    </section>

    <section class="container">
        <div class="title">Inscrivez-vous</div>
        <div class="content">
        <form action="#">
        <div class="category-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <input type="radio" name="gender" id="dot-4">
            <span class="category-title">Vous etes</span>
            <div class="category">
                <label for="dot-1">           
                <span class="dot one"></span>
                <span class="gender">Un homme</span>
                </label>
                <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Une femme</span>
                </label>
            </div>
            <span class="category-title">Catégorie membre</span>
            <div class="category">
                <label for="dot-3">
                <span class="dot three"></span>
                <span class="category-info">Etudiant</span>
                </label>
                <label for="dot-4">
                <span class="dot four"></span>
                <span class="category-info">Professeur</span>
                </label>
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
</main> 

<?php
include '../pages/footer.php';
?>

</body>
</html>