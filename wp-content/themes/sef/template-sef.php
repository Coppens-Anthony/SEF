<?php
/*
Template Name: SEF Page
*/

$first_section_title = get_field('first_section_title');
$second_section_title = get_field('second_section_title');
$third_section_title = get_field('third_section_title');
$fourth_section_title = get_field('fourth_section_title');


include 'header.php'; ?>
<main>
    <section class="sections" id="missions">
        <h2><?= $first_section_title ?></h2>
        <div>
            <p>est de fournir un refuge sûr et accumulation à ceux qui en ont besoin, tout en les
                accompagnant vers une vie stable et épanouie. Nous offrons un hébergement temporaire garantissant un
                espace sécurisé et respectueux où chaque individu se sent valorisé.
                <br>
                <br>
                Notre engagement va au-delà de l’hébergement. Nous proposons un suivi personnalisé pour aider nos
                résidents à construire un avenir meilleur. Cela inclut l’accompagnement dans les démarches
                administratives, le soutien éducatif et professionnel, ainsi que le soutien psychologique et émotionnel.
                Nous croyons que l’hébergement est le premier pas vers la sécurité, et notre soutien continu permet à
                chacun de retrouver confiance et de se reconstruire durablement.</p>
            <img alt="Image repr&eacute;sentant les missions" src="/wp-content/themes/sef/src/img/mission.jpg"
                 height="720" width="960"/>
        </div>
    </section>
    <section class="sections" id="gallery">
        <h2><?= $second_section_title ?></h2>
        <img src="/wp-content/themes/sef/src/img/gallery/one.jpg" alt="Photo de la vie chez SEF" id="gallery-one">
        <img src="/wp-content/themes/sef/src/img/gallery/two.jpg" alt="Photo de la vie chez SEF" id="gallery-two">
        <img src="/wp-content/themes/sef/src/img/gallery/three.jpg" alt="Photo de la vie chez SEF" id="gallery-three">
        <img src="/wp-content/themes/sef/src/img/gallery/four.jpg" alt="Photo de la vie chez SEF" id="gallery-four">
        <img src="/wp-content/themes/sef/src/img/gallery/five.jpg" alt="Photo de la vie chez SEF" id="gallery-five">
    </section>
    <section class="sections" id="staff">
        <h2><?= $third_section_title ?></h2>
        <div class="slider-wrapper">
            <div class="staff-mobile">
                <ul class="slider">
                    <li id="a">
                        <div>
                            <img alt="Photo d&apos;Anne-Sophie Portier"
                                 src="/wp-content/themes/sef/src/img/staff/anne-sophie.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Anne-Sophie Portier</p>
                            <p>
                                Engag&eacute;e depuis 14 ans
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de Virginie Dozot"
                                 src="/wp-content/themes/sef/src/img/staff/virginie.png" class="staffPicture"/>
                            <p class="staff-name">Virginie Dozot</p>
                            <p>Engag&eacute;e depuis 22 ans</p>
                        </div>
                    </li>
                    <li id="b">
                        <div>
                            <img alt="Photo de Pauline Royer"
                                 src="/wp-content/themes/sef/src/img/staff/pauline.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Pauline Royer</p>
                            <p>

                                Engag&eacute;e depuis 3 ans
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo d&apos;Audrey Pirson"
                                 src="/wp-content/themes/sef/src/img/staff/audrey_p.png" class="staffPicture"/>
                            <p class="staff-name">Audrey Pirson</p>
                            <p>Engag&eacute;e depuis 13 ans</p>
                        </div>
                    </li>
                    <li id="c">
                        <div>
                            <img alt="Photo de Pascale Jongen"
                                 src="/wp-content/themes/sef/src/img/staff/pascale_j.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Pascale Jongen</p>
                            <p>

                                Engag&eacute;e depuis 30 ans
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo d&apos;Ang&eacute;lique Marlet"
                                 src="/wp-content/themes/sef/src/img/staff/angelique.png" class="staffPicture"/>
                            <p class="staff-name">Ang&eacute;lique Marlet</p>
                            <p>stagiaire AS fin 2023</p>
                        </div>
                    </li>
                    <li id="d">
                        <div>
                            <img alt="Photo de Julie Migeot"
                                 src="/wp-content/themes/sef/src/img/staff/julie.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Julie Migeot</p>
                            <p>
                                stagiaire psycho 2023/24
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de Pascale Douillet"
                                 src="/wp-content/themes/sef/src/img/staff/pascale_d.png" class="staffPicture"/>
                            <p class="staff-name">Pascale Douillet</p>
                            <p>Engag&eacute;e depuis 4 ans</p>
                        </div>
                    </li>
                    <li id="e">
                        <div>
                            <img alt="Photo de Fabian Dendievel"
                                 src="/wp-content/themes/sef/src/img/staff/fabian.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Fabian Dendievel</p>
                            <p>
                                Engag&eacute;e depuis 4 mois
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de Nicolas Adans"
                                 src="/wp-content/themes/sef/src/img/staff/nicolas.png" class="staffPicture"/>
                            <p class="staff-name">Nicolas Adans</p>
                            <p>Engag&eacute;e depuis 6 mois</p>
                        </div>
                    </li>
                    <li id="f">
                        <div>
                            <img alt="Photo d&apos;Audrey Collinet"
                                 src="/wp-content/themes/sef/src/img/staff/audrey_c.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Audrey Collinet</p>
                            <p>

                                Engag&eacute;e depuis 1 an et demi
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de B&eacute;atrice de Lamotte"
                                 src="/wp-content/themes/sef/src/img/staff/beatrice.png" class="staffPicture"/>
                            <p class="staff-name">B&eacute;atrice de Lamotte</p>
                            <p>Nouvellement engag&eacute;e</p>
                        </div>
                    </li>
                </ul>
                <div class="slider-nav">
                    <a href="#a" title="Slide 1"></a>
                    <a href="#b" title="Slide 2"></a>
                    <a href="#c" title="Slide 3"></a>
                    <a href="#d" title="Slide 4"></a>
                    <a href="#e" title="Slide 5"></a>
                    <a href="#f" title="Slide 6"></a>
                </div>
            </div>
            <div class="staff-desktop">
                <ul class="slider">
                    <li id="desktop-a">
                        <div>
                            <img alt="Photo d&apos;Anne-Sophie Portier"
                                 src="/wp-content/themes/sef/src/img/staff/anne-sophie.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Anne-Sophie Portier</p>
                            <p>
                                Engag&eacute;e depuis 14 ans
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de Virginie Dozot"
                                 src="/wp-content/themes/sef/src/img/staff/virginie.png" class="staffPicture"/>
                            <p class="staff-name">Virginie Dozot</p>
                            <p>Engag&eacute;e depuis 22 ans</p>
                        </div>
                        <div>
                            <img alt="Photo de Pauline Royer"
                                 src="/wp-content/themes/sef/src/img/staff/pauline.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Pauline Royer</p>
                            <p>

                                Engag&eacute;e depuis 3 ans
                            </p>
                        </div>
                    </li>
                    <li id="desktop-b">
                        <div>
                            <img id="Virigine" alt="Photo d&apos;Audrey Pirson"
                                 src="/wp-content/themes/sef/src/img/staff/audrey_p.png" class="staffPicture"/>
                            <p class="staff-name">Audrey Pirson</p>
                            <p>Engag&eacute;e depuis 13 ans</p>
                        </div>
                        <div>
                            <img alt="Photo de Pascale Jongen"
                                 src="/wp-content/themes/sef/src/img/staff/pascale_j.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Pascale Jongen</p>
                            <p>

                                Engag&eacute;e depuis 30 ans
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo d&apos;Ang&eacute;lique Marlet"
                                 src="/wp-content/themes/sef/src/img/staff/angelique.png" class="staffPicture"/>
                            <p class="staff-name">Ang&eacute;lique Marlet</p>
                            <p>stagiaire AS fin 2023</p>
                        </div>
                    </li>
                    <li id="desktop-c">
                        <div>
                            <img alt="Photo de Julie Migeot"
                                 src="/wp-content/themes/sef/src/img/staff/julie.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Julie Migeot</p>
                            <p>
                                stagiaire psycho 2023/24
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de Pascale Douillet"
                                 src="/wp-content/themes/sef/src/img/staff/pascale_d.png" class="staffPicture"/>
                            <p class="staff-name">Pascale Douillet</p>
                            <p>Engag&eacute;e depuis 4 ans</p>
                        </div>
                        <div>
                            <img alt="Photo de Fabian Dendievel"
                                 src="/wp-content/themes/sef/src/img/staff/fabian.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Fabian Dendievel</p>
                            <p>

                                Engag&eacute;e depuis 4 mois
                            </p>
                        </div>
                    </li>
                    <li id="desktop-d">
                        <div>
                            <img id="Virigine" alt="Photo de Nicolas Adans"
                                 src="/wp-content/themes/sef/src/img/staff/nicolas.png" class="staffPicture"/>
                            <p class="staff-name">Nicolas Adans</p>
                            <p>Engag&eacute;e depuis 6 mois</p>
                        </div>
                        <div>
                            <img alt="Photo d&apos;Audrey Collinet"
                                 src="/wp-content/themes/sef/src/img/staff/audrey_c.png"
                                 class="staffPicture"/>
                            <p class="staff-name">Audrey Collinet</p>
                            <p>

                                Engag&eacute;e depuis 1 an et demi
                            </p>
                        </div>
                        <div>
                            <img id="Virigine" alt="Photo de B&eacute;atrice de Lamotte"
                                 src="/wp-content/themes/sef/src/img/staff/beatrice.png" class="staffPicture"/>
                            <p class="staff-name">B&eacute;atrice de Lamotte</p>
                            <p>Nouvellement engag&eacute;e</p>
                        </div>
                    </li>
                </ul>
                <div class="slider-nav">
                    <a href="#desktop-a" title="Slide 1"></a>
                    <a href="#desktop-b" title="Slide 2"></a>
                    <a href="#desktop-c" title="Slide 3"></a>
                    <a href="#desktop-d" title="Slide 4"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sections" id="history">
        <h2><?= $fourth_section_title ?></h2>
        <article class="timeline">
            <h3 class="sr-only">Ligne du temps</h3>
            <div class="timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box leftBox">
                    <h4>1938&nbsp;:&nbsp;Naissance de l&apos;id&eacute;e</h4>
                    <p>Le SEF est fond&eacute; par le P&egrave;re Dominique Pire, pr&ocirc;nant une ouverture &agrave;
                        tous au-del&agrave; des diff&eacute;rences
                        sociales, religieuses et politiques. Il met en avant l&apos;&eacute;ducation r&eacute;ciproque
                        entre aid&eacute;s et
                        aidants.</p>
                    <span class="left-container-arrow"></span>
                </div>
            </div>
            <div class="timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box rightBox">
                    <h4>1940&nbsp;:&nbsp;Fondation officielle</h4>
                    <p>Le SEF est officiellement fond&eacute;. Les b&eacute;n&eacute;voles re&ccedil;oivent une
                        formation professionnelle par des
                        experts, dont Simone Rouchet.</p>
                    <span class="right-container-arrow"></span>

                </div>
            </div>
            <div class="timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box leftBox">
                    <h4>1940-1981&nbsp;:&nbsp;Adaptation et interventions</h4>
                    <p>Le SEF adapte ses interventions aux besoins de l&apos;&eacute;poque, participant &agrave; des
                        actions de quartier et
                        de coordination.</p>
                    <span class="left-container-arrow"></span>

                </div>
            </div>
            <div class="timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box rightBox">
                    <h4>1981&nbsp;:&nbsp;Crise du logement</h4>
                    <p>Face &agrave; la crise du logement, le SEF ouvre sa premi&egrave;re maison d&apos;accueil,
                        offrant un refuge
                        familial &agrave; huit personnes.</p>
                    <span class="right-container-arrow"></span>

                </div>
            </div>
            <div class="timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box leftBox">
                    <h4>1992&nbsp;:&nbsp;Expansion des services</h4>
                    <p>Ouverture d&apos;une deuxi&egrave;me maison d&apos;accueil avec six logements, r&eacute;pondant
                        &agrave; la demande
                        croissante.</p>
                    <span class="left-container-arrow"></span>

                </div>
            </div>
            <div class="timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box rightBox">
                    <h4>2001&nbsp;:&nbsp;Logements supervis&eacute;s</h4>
                    <p>Trois logements supervis&eacute;s pour des familles sont g&eacute;r&eacute;s par le SEF en
                        partenariat avec l&apos;ASBL
                        &ldquo;Les Amis de Notre-Dame de La Sarte&rdquo;.</p>
                    <span class="right-container-arrow"></span>

                </div>
            </div>
            <div class="timeline_container last_timeline_container">
                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #184AE4;
                            }
                        </style>
                    </defs>
                    <circle class="cls-1" cx="10" cy="10" r="10"/>
                </svg>
                <div class="text-box leftBox">
                    <h4>Aujourd&apos;hui&nbsp;:&nbsp;Mission continue</h4>
                    <p>Le SEF continue de r&eacute;pondre &agrave; l&apos;urgence et aide les sans-abri &agrave; trouver
                        non seulement un logement
                        mais aussi un projet de vie.</p>
                    <span class="left-container-arrow"></span>

                </div>
            </div>

        </article>
    </section>
</main>
<?php include 'footer.php'; ?>