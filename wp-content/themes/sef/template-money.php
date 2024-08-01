<?php
/*
Template Name: Money Page
*/
include 'header.php'; ?>
<main>
    <section class="donateForm">
        <h2 class="sr-only">Formulaire de don</h2>
        <form method="post" action="">
            <div class="form-wrapper">
                <fieldset class="rising">
                    <h3 class="sr-only">Partie montant</h3>
                    <div class="category">
                        <input type="radio" id="general" name="category">
                        <label class="radio" for="general">G&eacute;n&eacute;ral</label>

                        <input type="radio" id="specific" name="category">
                        <label class="radio" for="specific">Sp&eacute;cifique</label>
                    </div>
                    <div class="rise">
                        <input type="checkbox" id="ten" name="ten" required>
                        <label for="ten">10€</label>

                        <input type="checkbox" id="twenty" name="twenty" required>
                        <label for="twenty">20€</label>

                        <input type="checkbox" id="fifty" name="fifty" required>
                        <label for="fifty">50€</label>
                    </div>
                    <div class="otherRise_container">
                        <input type="number" id="otherRise" name="otherRise"
                               placeholder="Choisissez votre propre montant" required>
                        <label for="otherRise" class="sr-only">Autre montant</label>
                    </div>
                </fieldset>
                <fieldset class="coords">
                    <h3 class="sr-only">Partie coordonn&eacute;es</h3>
                    <div>
                        <input type="text" id="name" name="name" placeholder="Anthony Coppens" required>
                        <label for="name">Nom</label>
                    </div>
                    <div>
                        <input type="text" id="email" name="email" placeholder="anthonycoppens04@gmail.com" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="last_coords_input">
                        <input type="text" id="telephone" name="telephone" placeholder="0477.81.06.47" required>
                        <label for="telephone">T&eacute;l&eacute;phone</label>
                    </div>
                </fieldset>
                <fieldset class="card">
                    <h3 class="sr-only">Partie payement</h3>
                    <div>
                        <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>
                        <label for="cardNumber">Num&eacute;ro de carte</label>
                    </div>
                    <div>
                        <input type="datetime-local" id="expiration" name="expiration" placeholder="MM/AA" required>
                        <label for="expiration">Expiration</label>
                    </div>
                    <div class="last_coords_input">
                        <input type="number" id="CVV" name="CVV" placeholder="123" required>
                        <label for="CVV">CVV/CVC</label>
                    </div>
                </fieldset>
            </div>
            <button type="submit" title="Validez votre donation">Valider</button>
        </form>
    </section>
</main>
<script src="src/js/main.js"></script>
<?php include 'footer.php'; ?>
