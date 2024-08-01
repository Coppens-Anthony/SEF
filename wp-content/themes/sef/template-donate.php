<?php
/*
Template Name: Donate Page
*/
include 'header.php'; ?>
<main>
    <section class="intro">
        <h2 class="sr-only">Le soutien</h2>
        <p>Votre g&eacute;n&eacute;rosit&eacute; nous permet de continuer notre travail vital dans la communaut&eacute;. Chaque don,
            petit ou grand, contribue &agrave; faire une r&eacute;elle diff&eacute;rence dans la vie des personnes que nous aidons.</p>
        <img alt="Image repr&eacute;sentant les projets" src="/wp-content/themes/sef/src/img/donate.jpg" height="1564" width="2000" id="donateImg"/>
    </section>
    <section class="sections" id="help">
        <h2>Votre aide nous aide &agrave; :</h2>
        <article>
            <h3 class="sr-only">Ce que nous pouvons faire avec vos dons</h3>
            <ul class="firstUl">
                <li id="first">
                    <p>Fournir des repas et des biens de premi&egrave;re n&eacute;cessit&eacute; aux familles dans le besoin.</p>
                </li>
                <li id="second">
                    <p>Soutenir nos programmes &eacute;ducatifs pour les enfants et les adultes.</p>
                </li>
            </ul>
            <ul>
                <li id="third">
                    <p>Financer nos initiatives de sant&eacute; et de bien-&ecirc;tre pour les populations vuln&eacute;rables.</p>
                </li>
                <li id="fourth">
                    <p>Am&eacute;liorer la qualit&eacute; des &eacute;tablissements dans laquelle nous accueillons les citoyens.</p>
                </li>
            </ul>
        </article>
    </section>
    <section class="sections">
        <h2>Les diff&eacute;rents types de dons</h2>
        <article class="donateCategory">
            <h3 class="sr-only">Les moyens de donation</h3>
            <div>
                <a href="/Dons financiers" title="Vers la page des dons financiers">
                    Financier
                </a>
                <p class="icon">
                    >
                </p>
            </div>
            <div>
                <a href="/Dons materiels" title="Vers la page des dons mat&eacute;riels">
                    Mat&eacute;riel
                </a>
                <p class="icon">
                    >
                </p>
            </div>
        </article>
    </section>
    <section class="sections" id="volunteer">
        <h2>Le b&eacute;n&eacute;volat</h2>
        <div>
            <p>Rejoignez-nous comme b&eacute;n&eacute;vole au SEF et transformez des vies, y compris la v&ocirc;tre. Ensemble,
                faisons la diff&eacute;rence par la solidarit&eacute; et l&apos;entraide. Votre cœur et votre temps ont un impact
                immense.</p>
            <img alt="Image repr&eacute;sentant le b&eacute;n&eacute;volat" src="/wp-content/themes/sef/src/img/volunteer.jpg" height="800" width="800"/>
        </div>
    </section>
    <section class="sections" id="store">
        <h2>Les achats dans nos magasins</h2>
        <div>
            <p>Visitez nos magasins SEF&nbsp;:&nbsp;chaque achat est un geste de cœur qui soutient des familles.
                Faites la diff&eacute;rence tout en d&eacute;couvrant des tr&eacute;sors uniques. Ensemble, changeons des vies.</p>
            <img alt="Image repr&eacute;sentant les magasins" src="/wp-content/themes/sef/src/img/store.jpg" height="206" width="206"/>
        </div>
        <div class="redirectToStore">
            <a href="/magasins/" class="<?= urlIs('/magasins/') ? 'main' : 'menu__item' ?>" title="Vers la page des magasins">Magasins</a>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>
