let Groupe = Vue.component('Groupe',{
    template:`
    <div class="page Groupe">
        <h1>{{groupe.nom}}</h1>
        <section class="infos-ludotheque">
            <div class="info-ludotheque">
                <h5>Nbr de Membre :</h5>
            </div>
            <div class="info-ludotheque">
                <p>{{groupe.lesJoueurs.length}}</p>
            </div>
            
        </section>
        <hr/>
        <section class="section-haut-page liste">
            <h2 class="typo-whitegrey">Mes partenaires/adversaires</h2>
            <div class="recherche">
                <input type="search" class="grey2" id="site-search" name="q"
                       aria-label="Search through site content" placeholder="Rechercher">
    
                <button class="whitegrey"><img src="css/images/svg/search-solid.svg" style="height: 30px; width: auto;" alt="search"></button>
            </div>
            <div class="legende-section-choix">
                <p>Image</p>
                <p>Nom-Infos</p>
            </div>
            <hr/>
            <router-link class="section-liste-choix" :to="{path: '/joueur', query:{id:joueur.id}}" v-for="joueur in listeJoueurs" :key="joueur.id">
                <img :src="joueur.image" height="62" width="62" alt="">
                <div class="info-nom-ludo">
                    <h3>{{joueur.prenom}} {{joueur.nom}}</h3>
                    <hr>
                    <div class="info-ludo">
                        <p>{{joueur.pseudo}}</p>
                        <br/>
                        <p>{{joueur.idcategorie}}</p>
                    </div>
                </div>
                <svg focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 fleche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </router-link>
            <section class="section-bouton-centre">
                <router-link to="createAjoutJoueur" class="bouton green typo-white">Ajouter un membre</router-link>
            </section>
        </section>
    </div>
    `,
    data(){
        return{
            groupe:{},
            listeJoueurs:[]
        }
    },
    mounted(){
        console.log("this", this.$route.query.id)
        axios.get(backEnd.getGroupe+'?id='+this.$route.query.id)
            // Réponse promise et récupération des résultats

            .then(response => {
                this.groupe = response.data;
                console.log("groupe = ", this.groupe);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })

        axios.get(backEnd.ListeGroupeRegroupeJoueur+'?id='+this.$route.query.id)
            // Réponse promise et récupération des résultats
            .then(response => {
                this.listeJoueurs = response.data;
                console.log("listeJoueurs = ", this.listeJoueurs);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })

    },
    methods:{

    }
})



