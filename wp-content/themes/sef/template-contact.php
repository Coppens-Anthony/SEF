<?php
/*
Template Name: Contact Page
*/
include 'header.php'; ?>
<main>
    <section class="form">
        <h2 class="sr-only">Page de contact</h2>
        <article id="contactInfo">
            <h3>Contactez-nous&nbsp;!</h3>
            <p>085 / 21 57 52</p>
            <p>contact@sefasbl.com</p>
            <p>Rue du March&eacute; 33 4500 HUY</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2536.86158016455!2d5.2410361758847275!3d50.51814228248832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDMxJzA1LjMiTiA1wrAxNCczNy4wIkU!5e0!3m2!1sfr!2sbe!4v1718539613216!5m2!1sfr!2sbe"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </article>
        <article class="contactForm">
            <h3 class="sr-only">Formulaire de contact</h3>
            <form action="/wp-content/themes/sef/contactTraitement.php" method="post">
                <div>
                    <input type="text" id="name" name="name" placeholder="Anthony Coppens" required>
                    <label for="name">Nom</label>
                </div>
                <div>
                    <input type="text" id="email" name="email" placeholder="anthonycoppens04@gmail.com" required>
                    <label for="email">Email</label>
                </div>
                <div>
                    <input type="text" id="subject" name="subject" placeholder="Bénévolat" required>
                    <label for="subject">Sujet</label>
                </div>
                <div>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Renseignez votre message..."
                              required></textarea>
                    <label for="message">Message</label>
                </div>
                <div id="button">
                    <button type="submit" title="Soumettre vos donn&eacute;es">Envoyer</button>
                </div>
            </form>
        </article>
    </section>
</main>
<?php include 'footer.php'; ?>
