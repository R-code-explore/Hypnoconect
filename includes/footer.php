<div class="footer">

    <div class="contact_box">
    
    <div id="contact" class="contact">
    <h5 class="contact-title titles">Contact et infos</h5>
        <form enctype="multipart/form-data">
            <input class="text_input" type="text" name="name" placeholder="Votre nom et prénom">
            <input class="text_input" type="email" name="email" placeholder="Votre email">
            <input class="text_input" type="tel" name="tel" placeholder="votre numéro de téléphone">
            <textarea name="mess" placeholder="Votre message ici"></textarea>
            <input class="file_input" type="file">

            <button class="contactBtn general_btn" type="submit">Envoyer</button>
        </form>
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

    <p class="reserv">© 2022 Hypnoconect. Tout droits réservés.</p>

</div>

<style>
    .footer{width: 100%; display: block; background: #121C47; padding-bottom: 1px;}

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

</body>
</html>