let Ludotheques = Vue.component('Ludotheques',{
    template:`
    <div class="page Ludotheques">
    <h1>Ma ludothèque</h1>
    <section class="infos-ludotheque">
        <div class="info-ludotheque">
            <h5>Nbr de Jeux :</h5>
            <h5>Catégorie Préférée :</h5>
        </div>
        <div class="info-ludotheque">
            <p>Nbr de Jeux</p>
            <p>Catégorie Préférée</p>
        </div>
        <hr>
        <div class="info-proprio">
            <h5>Autres membres propriétaire</h5>
            <p>Membre 1 | Membre 2 | Membre 3 | ...</p>
        </div>
    </section>
    <hr/>
    <section class="section-haut-page liste">
        <h2 class="typo-whitegrey">Mes jeux</h2>
        <div class="recherche">
            <input type="search" class="grey2" id="site-search" name="q"
                   aria-label="Search through site content" placeholder="Rechercher">

            <button class="whitegrey"><img src="images/svg/search-solid.svg" style="height: 30px; width: auto;" alt="search"></button>
        </div>
        <div class="legende-section-choix">
            <p>Image</p>
            <p>Nom-Infos</p>
        </div>
        <hr/>
        <router-link class="section-liste-choix" to="Jeux">
            <img src="images/Jeux/Ludo.png" height="62" width="62" alt="">
            <div class="info-nom-ludo">
                <h3>Nom Jeu</h3>
                <hr>
                <div class="info-ludo">
                    <p>Durée</p>
                    <br/>
                    <p>Nbr de joueur</p>
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