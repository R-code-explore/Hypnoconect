<div class="footer">
    <div class="social_medias">
        <a class="social_links" href="https://m.facebook.com/HypnoConect/">Facebook Hypnoconect <i class="gg-facebook"></i></a>
        <a class="social_links" href="https://www.instagram.com/hypnoconect/?hl=fr">Instagram Hypnoconect <i class="gg-instagram"></i></a>

        <style>
            .social_medias{
                display: block;
                border: 1px solid #F5E5FF;
                border-radius: 5px;
                width: 80%;
                max-width: 450px;
                padding: 10px 10px;
                margin: 40px auto;
                transition: .3s ease-in-out;
            }
            .social_links{
                display: flex;
                text-decoration: none;
                color: #F5E5FF;
                width: 100%;
                margin: 10px auto;
                justify-content: center;
                font-weight: 500;
            }
            .social_links i{
                margin-left:10px;
            }

            .pay_link_close{
                display: none;
                transition: .3s ease-in-out;
            }

            .pay_links{
                background: #F5E5FF;
                border: none;
                margin-top: 10px;
                margin-bottom: 10px;
                text-decoration: none;
                color: #121C47;
                font-weight: 500;
                display: block;
            }
            .pay_links:hover{background: white; color: skyblue;}

            .open_pay_link{
                background: #F5E5FF;
                color: #121C47;
                display: block;
                text-align: center;
                margin: auto;
            }

            .text_open_links{
                display: block;
                text-align: center;
                color: #F5E5FF;
            }

        </style>

    </div>
    <button class="open_pay_link btn" onclick="openPayLinks()">Procéder à un paiement</button>
    <div class="social_medias pay_link_close" id="payLinks">
        <button class="close_pay_link btn btn-danger" onclick="closePayLinks()">Fermer</button>
        <a class="pay_links btn btn-success" href="https://buy.stripe.com/fZebJJeNobUM3qEfYY">Lien de paiement pour : <br>" Séance de suivi individuel " - 75€</a>
        <a class="pay_links btn btn-success" href="https://buy.stripe.com/aEU6ppdJkbUM9P29AB">Lien de paiement pour :<br>" Tarif réduit adolescents et étudiants " - 50€</a>
        <a class="pay_links btn btn-success" href="https://buy.stripe.com/8wM9BBcFgaQI5yM5km">Lien de paiement pour :<br>" Accompagnement couple & famille (1h30) " - 90€</a>
    </div>

    <script type="text/javascript">
        
        const payLinks = document.getElementById('payLinks')

        function openPayLinks(){
            payLinks.classList.remove('pay_link_close')
        }

        function closePayLinks(){
            payLinks.classList.add('pay_link_close')
        }
    
    </script>

    <div class="contact_box">
    
    <div id="contact" class="contact">
    <h5 class="contact-title titles">Contact et infos</h5>
        <form method="post" action="./msg_send.php">
            <input class="text_input" type="text" name="name" placeholder="Votre nom et prénom">
            <input class="text_input" type="email" name="email" placeholder="Votre email">
            <input class="text_input" type="tel" name="tel" placeholder="votre numéro de téléphone">
            <textarea name="mess" placeholder="Votre message ici"></textarea>

            <button class="contactBtn general_btn" type="submit">Envoyer le message</button>
        </form>

        <!-- <form method="POST" action="./session/file_send.php" enctype="multipart/form-data">
            <input class="file_input" name="upfile" type="file">

            <button class="contactBtn general_btn" type="submit">Envoyer le justificatif</button>
        </form> -->
    </div>

    <div class="footer_logo">
        <img src="<?=$footerLogo?>">
    </div>

    </div>

    <div class="infos">

        <div class="infoDiv1">
            <a href="cgu.php">Conditions générales d'utilisations</a>
            <br>
            <br>
            <p><strong>Email:</strong> contact@hypnoconect.com</p>
            <p><strong>Téléphone:</strong> <a href="tel:+336-03-51-90-45">+33 6 03 51 90 45</a></p>
            <p><strong>Adresse:</strong> 18 square Pablo Picasso 60740 SAINT MAXIMIN</p>
            <p>
            <strong>Horaires</strong>
            <br>
            <strong>Cabinet :</strong> Lundi – mardi – jeudi – vendredi<br>de 08h30 à 16h
            <br><br>
            <strong>Visio :</strong> Lundi - Mardi - Jeudi - Vendredi de 8h30 à 23h</p>
        </div>

        <div class="infoDiv2">
        <iframe id="localisation" class="footer-carte" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1302.940891966763!2d2.454415!3d49.221769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e649adf697a7fd%3A0xccfc33e64b76f32c!2s18%20Sq.%20Pablo%20Picasso%2C%2060740%20Saint-Maximin!5e0!3m2!1sfr!2sfr!4v1648488370299!5m2!1sfr!2sfr" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    <p class="reserv">© 2022 <a class="connexion" href="./connexion.php">Hypnoconect</a>. Tout droits réservés.</p>

</div>

<style>
    .connexion{color:white;}
    .connexion:hover{color: white;}

    .footer{width: 100%; display: block; background: #121C47; padding-bottom: 1px; padding-top: 40px;}

    .contact_box{
        display: block;
        width: 80%;
        max-width: 950px;
        margin: auto;
    }

    /*Contact Form*/
    /*Contact Form*/
    .contact{
        display: block;
        width: 100%;
    }

    .contact h5{color: #F5E5FF; line-height: 2em; text-align: center;}

    .text_input{
        display: block;
        width: 80%;
        max-width: 450px;
        padding: 10px;
        margin: 15px auto;
        border: none;
        border-radius: 5px;
        text-align: center;
    }
    .contact form textarea{
        display: block;
        width: 80%;
        max-width: 450px;
        height: 250px;
        padding: 10px;
        margin: 20px auto;
        border: none;
        border-radius: 5px;
        resize: none;
    }
    .file_input{
        display: block;
        width: 80%;
        max-width: 450px;
        margin: 20px auto;
        color: white;
    }
    .contactBtn{
        display: block;
        padding: 10px;
        margin: 20px auto;
        color: white;
        background: none;
        border: solid 1px white;
        border-radius: 5px;
    }

    .footer_logo{
        display: block;
        width: 80%;
        max-width: 450px;
        margin: 15px auto;
    }
    .footer_logo img{
        width: 100%;
    }

    /**********************/
    /**********************/

    .infos{
        display: block;
        width: 80%;
        max-width: 950px;
        margin: 20px auto;
        color: white;
    }

    .footer-carte{width: 100%;}

    .infoDiv1 a{color: #F5E5FF; font-weight: 500;}

    .reserv{margin: 20px 0; text-align: center; color: white;}

    @media (min-width: 950px){
    
        .contact_box{
            display: flex;
            width: 80%;
            max-width: 950px;
            margin: auto;
        }

        .infoDiv1, .infoDiv2{width: 40%; margin: auto;}
        .footer-carte{width: 100%;}

        .infos{
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
        }

    }

</style>

<script src="./js/index.js"></script>
</body>
</html>