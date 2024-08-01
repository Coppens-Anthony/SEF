<?php
/*
Template Name: Accommoadation Page
*/
include 'header.php'; ?>
<main>
    <section class="intro">
        <h2 class="sr-only">Les h&eacute;bergements</h2>
        <p>L&apos;insertion ou la r&eacute;insertion sociale d&apos;adultes et de familles en difficult&eacute;
            Le temps pass&eacute; au SEF doit être mis &agrave; profit par chacun pour r&eacute;gler ses questions
            administratives,
            repenser sa fa&ccedil;on de vivre avec les autres et pr&eacute;parer son d&eacute;part. Afin, si possible,
            de ne pas revenir.</p>
        <img alt="Image repr&eacute;sentant les projets" src="/wp-content/themes/sef/src/img/accommodation.jpg" height="500" width="1000"/>
    </section>
    <section class="sections" id="houses">
        <h2>Nos h&eacute;bergements</h2>
        <article>
            <h3 class="sr-only">Premier h&eacute;bergement</h3>
            <div>
                <p class="houses-address">
                    Rue des Augustins, 27 &agrave; Huy.
                </p>
                <p class="houses-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet architecto blanditiis dolor
                    dolores.
                </p>
                <ul>
                    <li>
                        8 lits
                    </li>
                    <li>
                        40 personnes par an
                    </li>
                </ul>
            </div>

            <img alt="Image du premier h&eacute;bergement" src="/wp-content/themes/sef/src/img/houses/firstHouse.jpg" height="427" width="320"/>
        </article>
        <article class="secondHouse">
            <h3 class="sr-only">Deuxi&egrave;me h&eacute;bergement</h3>
            <img alt="Image du deuxi&egrave;me h&eacute;bergement" src="/wp-content/themes/sef/src/img/houses/secondHouse.jpg" height="600"
                 width="450"/>
            <div>
                <p class="houses-address">
                    Rue du March&eacute; 35 &agrave; Huy.
                </p>
                <p class="houses-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet architecto blanditiis dolor
                    dolores.
                </p>
                <ul>
                    <li>
                        8 lits
                    </li>
                    <li>
                        40 personnes par an
                    </li>
                </ul>
            </div>

        </article>
    </section>
</main>
<?php include 'footer.php'; ?>