let Groupes = Vue.component('Groupes',{
    template:`
    <div class="page Ludotheques">
    <h1>Mon Groupe</h1>
    <section class="infos-ludotheque">
        <div class="info-ludotheque">
            <h5>Nbr de Membre :</h5>
            <h5>Catégorie Préférée :</h5>
        </div>
        <div class="info-ludotheque">
            <p>Nbr de Membre</p>
            <p>Catégorie Préférée</p>
        </div>
        <hr/>
        <div class="info-ludotheque">
            <h5>Nbr de ludothèques :</h5>

        </div>
        <div class="info-ludotheque">
            <p>Nbr de ludothèques</p>

        </div>
    </section>
    <hr/>
    <section class="section-haut-page liste">
        <h2 class="typo-whitegrey">Mes partenaires/adversaires</h2>
        <div class="recherche">
            <input type="search" class="grey2" id="site-search" name="q"
                   aria-label="Search through site content" placeholder="Rechercher">

            <button class="whitegrey"><img src="images/svg/search-solid.svg" style="height: 30px; width: auto;" alt=""></button>
        </div>
        <div class="legende-section-choix">
            <p>Image</p>
            <p>Nom-Infos</p>
        </div>
        <hr/>
        <router-link class="section-liste-choix" to="Compte">
            <img src="images/Jeux/Ludo.png" height="62" width="62" alt="">
            <div class="info-nom-ludo">
                <h3>Nom Compte</h3>
                <hr>
                <div class="info-ludo">
                    <p>ID Joueur</p>
                    <br/>
                    <p>Catégorie préférée</p>
                </div>
            </div>
            <svg focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 fleche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
        </router-link>
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
