<div class="footer">
    <h5 class="contact-title titles">Contact et infos</h5>
    <div id="contact" class="contact">
        <form enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Votre nom et prénom">
            <input type="email" name="email" placeholder="Votre email">
            <input type="tel" name="tel" placeholder="votre numéro de téléphone">
            <textarea name="mess" placeholder="Votre message ici"></textarea>
            <input type="file">

            <button class="contactBtn general_btn" type="submit">Envoyer</button>
        </form>
    </div>

    <div class="infos">

        <div class="infoDiv1">
            <a href="cgu.php">Conditions générales d'utilisations</a>
            <br>
            <br>
            <p><strong>Email:</strong> contact@hypnoconect.com</p>
            <p><strong>Téléphone:</strong> +33 0 00 00 00 00</p>
            <p><strong>Adresse:</strong> 18 square Pablo Picasso 60740 SAINT MAXIMIN</p>
            <p>
            <strong>Horaires</strong>
            <br>
            <strong>Cabinet :</strong> Lundi – mardi – jeudi –<br>vendredi de 08h30 à 16h
            <br><br>
            <strong>Visio :</strong> Mêmes horaires qu’en cabinet<br>+ du lundi au vendredi de 21h à 23h
            </p>
        </div>

        <div class="infoDiv2">
        <iframe class="footer-carte" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1302.940891966763!2d2.454415!3d49.221769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e649adf697a7fd%3A0xccfc33e64b76f32c!2s18%20Sq.%20Pablo%20Picasso%2C%2060740%20Saint-Maximin!5e0!3m2!1sfr!2sfr!4v1648488370299!5m2!1sfr!2sfr" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

</div>

<style>
    .footer{
        display: block;
        width: 100%;
        padding: 20px 0;
        background: #480075;
        color: white;
    }

    .contact-title{
        display: block;
        text-align: center;
        margin: 40px auto;
    }

    .contact{
        display: block;
        width: 80%;
        max-width: 450px;
        margin: 20px auto;
    }
    .contact form input{
        display: block;
        width: 100%;
        margin: 20px auto;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }
    .contact form textarea{
        display: block;
        width: 100%;
        height: 250px;
        padding: 10px;
        resize: none;
        text-align: start;
    }
    .contactBtn{
        display: block;
        margin: 20px auto;
    }

    .infos{
        display: block;
        width: 80%;
        max-width: 850px;
        margin: 80px auto;
    }

    .footer-carte{
        border-radius: 5px;
        box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
        -webkit-box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
        -moz-box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
    }

    @media (min-width: 950px){
        .infos{
            display: flex;
            justify-content: space-between;
        }
    }

</style>

<script src="<?=$pageJs?>"></script>
</body>
</html>