<?php
/*
Template Name: Stores Page
*/
include 'header.php'; ?>
<main>
    <section class="intro_stores">
        <h2 class="sr-only">Les magasins</h2>
        <p>&Agrave; travers nos magasins solidaires, nous offrons &agrave; nos b&eacute;n&eacute;ficiaires des produits
            essentiels &agrave; des prix abordables tout en finan&ccedil;ant nos activit&eacute;s.
            Ces espaces favorisent l&apos;insertion sociale et professionnelle en offrant des opportunit&eacute;s de
            rencontre et d&apos;&eacute;change. En participant &agrave; leur gestion,
            nos b&eacute;n&eacute;ficiaires acqui&egrave;rent des comp&eacute;tences pr&eacute;cieuses, retrouvant ainsi
            dignit&eacute; et autonomie. Vos dons et achats contribuent &agrave; bâtir une communaut&eacute; plus
            solidaire et inclusive.</p>
        <img id="clothe" alt="Image repr&eacute;sentant un v&ecirc;tement" src="/wp-content/themes/sef/src/img/stores/clothe.jpg" height="206"
             width="206"/>
        <img id="book" alt="Image repr&eacute;sentant un livre" src="/wp-content/themes/sef/src/img/stores/book.jpg" height="206" width="206"/>
        <img id="furniture" alt="Image repr&eacute;sentant un meuble" src="/wp-content/themes/sef/src/img/stores/furniture.jpg" height="206"
             width="206"/>
    </section>
    <section class="sections" id="stores">
        <h2>Nos Magasins</h2>
        <div>
            <article>
                <img alt="Image du magasin" src="/wp-content/themes/sef/src/img/stores/bric_a_brac.jpg" height="212" width="320"/>
                <h3>LE BRIC &Agrave; BRAC</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam animi aut debitis deleniti
                    doloremque esse, eveniet id illum.</p>
                <p class="store-address">Rue du March&eacute;, 35 - 4500 Huy 085/21.57.52</p>
            </article>
            <article>
                <img alt="Image du magasin" src="/wp-content/themes/sef/src/img/stores/bouquinerie.jpg" height="212" width="320"/>
                <h3>LA BOUQUINERIE</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam animi aut debitis deleniti
                    doloremque esse, eveniet id illum.</p>
                <p class="store-address">Rue des Augustins, 27 - 4500 Huy 085/21.12.56</p>
            </article>
            <article>
                <img alt="Image du magasin" src="/wp-content/themes/sef/src/img/stores/depot_meuble.jpg" height="212" width="320"/>
                <h3>LE D&Eacute;P&Ocirc;T-MEUBLES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet debitis doloremque dolorum
                    ducimus et eveniet.</p>
                <p class="store-address">Ch&eacute;e de Waremme, 18 - 4500 Huy 0496/03.70.90</p>
            </article>
        </div>
    </section>
    <section class="sections" id="table">
        <h2>Les horaires</h2>
        <table>
            <caption class="sr-only">Horaires d&apos;ouverture des magasins</caption>
            <tr>
                <th>&nbsp;</th>
                <th>Le BRIC &Agrave; BRAC</th>
                <th>LA BOUQUINERIE</th>
                <th>LE D&Eacute;P&Ocirc;T-MEUBLES</th>
            </tr>
            <tr>
                <th class="day">Lundi</th>
                <td>FERM&Eacute;</td>
                <td>FERM&Eacute;</td>
                <td>FERM&Eacute;</td>
            </tr>
            <tr>
                <th class="day">Mardi</th>
                <td>14h - 17h</td>
                <td>12h - 17h</td>
                <td>9h - 17h</td>
            </tr>
            <tr>
                <th class="day">Mercredi</th>
                <td>9h - 17h</td>
                <td>12h - 17h</td>
                <td>9h - 17h</td>
            </tr>
            <tr>
                <th class="day">Jeudi</th>
                <td>9h - 12h</td>
                <td>12h - 17h</td>
                <td>FERM&Eacute;</td>
            </tr>
            <tr>
                <th class="day">Vendredi</th>
                <td>14h - 17h</td>
                <td>12h - 17h</td>
                <td>FERM&Eacute;</td>
            </tr>
            <tr>
                <th class="day">Samedi</th>
                <td>FERM&Eacute;</td>
                <td>10h - 13h <sup class="red infoSup">*</sup></td>
                <td>10h - 16H</td>
            </tr>
            <tr>
                <th class="day">Dimanche</th>
                <td>FERM&Eacute;</td>
                <td>FERM&Eacute;</td>
                <td>FERM&Eacute;</td>
            </tr>
        </table>
        <small class="red">*&nbsp;:&nbsp;uniquement le premier samedi du mois</small>
    </section>
</main>
<?php include 'footer.php'; ?>