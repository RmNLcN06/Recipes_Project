<main class="wrapper__main">
    <section class="wrapper__main--section">
        <h1 class="wrapper__main--section--title">Les dernières recettes postées / Last Posted Recipes</h1>
        <div class="wrapper__main--section--container">

        <?php
        foreach ($recipes as $recipe) {
            if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) { ?>

                <div class="wrapper__main--section--container--card">
                    <img src="<?php echo $recipe['image']; ?>" alt="" class="wrapper__main--section--container--card--img">
                    <h2 class="wrapper__main--section--container--card--name"><?php echo $recipe['title']; ?></h2>
                    <p class="wrapper__main--section--container--card--category"><?php echo $recipe['category']; ?></p>
                    <p class="wrapper__main--section--container--card--description"><?php echo $recipe['recipe']; ?></p>
                    <p class="wrapper__main--section--container--card--author">de <?php echo $recipe['author']; ?> (<?php echo $recipe['mail']; ?>)</p>
                    <p class="wrapper__main--section--container--card--date">le <?php echo $recipe['date']; ?></p>
                </div>
        <?php };
        }; ?>

        </div>


        <!-- <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div> -->
    </section>
    <section class="wrapper__main--section">
        <h1 class="wrapper__main--section--title">Les recettes les plus populaires / Most popular recipes</h1>
        <div class="wrapper__main--section--container">

        <?php
        foreach ($recipes as $recipe) {
            if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) { ?>

                <div class="wrapper__main--section--container--card">
                    <img src="<?php echo $recipe['image']; ?>" alt="" class="wrapper__main--section--container--card--img">
                    <h2 class="wrapper__main--section--container--card--name"><?php echo $recipe['title']; ?></h2>
                    <p class="wrapper__main--section--container--card--category"><?php echo $recipe['category']; ?></p>
                    <p class="wrapper__main--section--container--card--description"><?php echo $recipe['recipe']; ?></p>
                    <p class="wrapper__main--section--container--card--author">de <?php echo $recipe['author']; ?> (<?php echo $recipe['mail']; ?>)</p>
                    <p class="wrapper__main--section--container--card--date">le <?php echo $recipe['date']; ?></p>
                </div>
        <?php };
        }; ?>
        
        </div>

        <!-- <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div> -->
    </section>
    <section class="wrapper__main--section">
        <h1 class="wrapper__main--section--title">Les recettes à venir / Forthcoming recipes</h1>
        <div class="wrapper__main--section--container">

        <?php
        foreach ($recipes as $recipe) {
            if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) { ?>

                <div class="wrapper__main--section--container--card">
                    <img src="<?php echo $recipe['image']; ?>" alt="" class="wrapper__main--section--container--card--img">
                    <h2 class="wrapper__main--section--container--card--name"><?php echo $recipe['title']; ?></h2>
                    <p class="wrapper__main--section--container--card--category"><?php echo $recipe['category']; ?></p>
                    <p class="wrapper__main--section--container--card--description"><?php echo $recipe['recipe']; ?></p>
                    <p class="wrapper__main--section--container--card--author">de <?php echo $recipe['author']; ?> (<?php echo $recipe['mail']; ?>)</p>
                    <p class="wrapper__main--section--container--card--date">le <?php echo $recipe['date']; ?></p>
                </div>
        <?php };
        }; ?>
        
        </div>

        <!-- <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div> -->
    </section>
    <section class="wrapper__main--section">
        <h1 class="wrapper__main--section--title">Déjeuner sur le pouce / Grab a quick lunch</h1>
        <div class="wrapper__main--section--container">

        <?php
        foreach ($recipes as $recipe) {
            if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) { ?>

                <div class="wrapper__main--section--container--card">
                    <img src="<?php echo $recipe['image']; ?>" alt="" class="wrapper__main--section--container--card--img">
                    <h2 class="wrapper__main--section--container--card--name"><?php echo $recipe['title']; ?></h2>
                    <p class="wrapper__main--section--container--card--category"><?php echo $recipe['category']; ?></p>
                    <p class="wrapper__main--section--container--card--description"><?php echo $recipe['recipe']; ?></p>
                    <p class="wrapper__main--section--container--card--author">de <?php echo $recipe['author']; ?> (<?php echo $recipe['mail']; ?>)</p>
                    <p class="wrapper__main--section--container--card--date">le <?php echo $recipe['date']; ?></p>
                </div>
        <?php };
        }; ?>
        
        </div>

        <!-- <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div> -->
    </section>
    <section class="wrapper__main--section">
        <h1 class="wrapper__main--section--title">Les recettes à petit prix / Low-priced recipes</h1>
        <div class="wrapper__main--section--container">

        <?php
        foreach ($recipes as $recipe) {
            if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) { ?>

                <div class="wrapper__main--section--container--card">
                    <img src="<?php echo $recipe['image']; ?>" alt="" class="wrapper__main--section--container--card--img">
                    <h2 class="wrapper__main--section--container--card--name"><?php echo $recipe['title']; ?></h2>
                    <p class="wrapper__main--section--container--card--category"><?php echo $recipe['category']; ?></p>
                    <p class="wrapper__main--section--container--card--description"><?php echo $recipe['recipe']; ?></p>
                    <p class="wrapper__main--section--container--card--author">de <?php echo $recipe['author']; ?> (<?php echo $recipe['mail']; ?>)</p>
                    <p class="wrapper__main--section--container--card--date">le <?php echo $recipe['date']; ?></p>
                </div>
        <?php };
        }; ?>
        
        </div>

        <!-- <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div>
        <div class="wrapper__main--section--card">
            <img src="" alt="" class="wrapper__main--section--card--img">
            <h2 class="wrapper__main--section--card--name"></h2>
            <p class="wrapper__main--section--card--description"></p>
            <p class="wrapper__main--section--card--author"></p>
            <p class="wrapper__main--section--card--date"></p>
        </div> -->
    </section>
</main>