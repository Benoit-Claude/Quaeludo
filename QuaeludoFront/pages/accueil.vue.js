let Accueil = Vue.component('Accueil',{
    template:`
    <div class="page Accueil">
    <section class="section-haut-page">
        <h1>Bienvenue,<br>explorez et découvrez le <br>jeu qui vous convient</h1>

        <div class="carte">

            <div class="carte-logo">
                <div class="carte-logo-gauche">
                    <img id="logo-carte1" src="css/img/Logo/logo-Quae-Ludo.png" alt="logo">
                </div>
                <div class="carte-logo-droit">
                    <img id="logo-carte2" src="css/img/Logo/logo-Quae-Ludo.png" alt="logo">
                </div>
            </div>
            <h1 class="typo-green">Nouveauté</h1>
            <p class="typo-blackgrey">Retrouvez les dernières nouveautés !</p>
            <div class="bouton">
                <a href="landingpage.html" class=" green typo-white">Venez-voir !</a>
            </div>
        </div>
    </section>

    <section class="section-groupe blackgrey">
        <h2 class="typo-yellow">Créez votre groupe de joueurs</h2>
        <p class="typo-white">Vous n'avez plus à débattre sur le jeu auquel vous allez jouer ! Avec Quaeludo, le choix vous convaincra et la soirée sera meilleure !</p>
        <div class="bouton ">
            <a href="Groupes.html" class="typo-blackgrey yellow">Mes Groupes</a>
        </div>
    </section>

    <section class="section-pub white">
        <p>Liens affiliés Amazon</p>
        <div class="lienaffiliepub">
            <iframe style="width:120px; height:240px; " src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=FR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=raphbonin-21&language=fr_FR&marketplace=amazon&region=FR&placement=B08NW1KH8S&asins=B08NW1KH8S&linkId=0b3fe2e11258787dff5b9f270c73afc0&show_border=true&link_opens_in_new_window=true"></iframe>
            <iframe style="width:120px; height:240px;" src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=FR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=raphbonin-21&language=fr_FR&marketplace=amazon&region=FR&placement=B08BZFF5TX&asins=B08BZFF5TX&linkId=e00992a817421b218278337ab070a976&show_border=true&link_opens_in_new_window=true"></iframe>
            <iframe style="width:120px; height:240px;" src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=FR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=raphbonin-21&language=fr_FR&marketplace=amazon&region=FR&placement=B084GP7X3P&asins=B084GP7X3P&linkId=aea79b332a31f9b4aae3961cb8e6325a&show_border=true&link_opens_in_new_window=true"></iframe>
        </div>
    </section>

    <section class="section-ludotheque white">
        <h2 class="typo-red">Ajoutez des jeux à votre ludothèque</h2>
        <p class="typo-blackgrey">Constituez votre ludothèque à partir des jeux qui vous plaisent, choisissez différentes catégories et partagez-la avec vos amis !</p>

        <div class="bouton">
            <a href="Ludotheques.html" class="typo-white red">Ludothèque</a>
        </div>
    </section>

    <section class="section-jeux blackgrey">
        <h2 class="typo-blue">Acquérez des jeux grâce à nos partenariats</h2>
        <p class="typo-white">Accédez à notre boutique spécialisée et faites l'acquisition du jeu de vos rêves !</p>
        <p class="typo-white">N'attendez plus pour jouer au plus vite à votre jeu préféré !</p>
        <div class="bouton">
            <a href="Jeux.html" class="typo-blackgrey blue">J'achète</a>
        </div>
    </section>

    <section class="section-ajout-jeu white">
        <h2 class="typo-red">Vous ne trouvez pas votre jeu ?</h2>
        <p class="typo-blackgrey">Ce n'est pas un problème, avec Quaeludo, vous pouvez rajouter votre jeu en créant la fiche appropriée dans l'éditeur de jeu ! </p>
        <div class="bouton">
            <a href="CreerJeu.html" class="typo-white red">J'ajoute mon jeu</a>
        </div>
    </section>
    </div>
    `,
    data(){
        return{
        }
    },
    mounted(){

    },
    methods:{

    }
})