    <?php


    foreach ($articles as $article) {
        echo '<main id="book_card">';
        '<div class="card">';
        '<p class="dispo">' . $article['dispo'] . '</p>';
        '<img src="/upload/' . $article['photo'] . '">';
        '<h1>' . $article['titre_ouvrage'] . '</h1>';

        '<p>Some text about the jeans..</p>';
        '<p><button>Add to Cart</button></p>';
        '</div>';
        '</main>';
    }
    ?>
