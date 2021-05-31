let Compte = Vue.component('Compte',{
    template:`
    <div class="page Compte">
        <section class="section-image-haut-page">
            <div class="section-compte-image-compte">
                <img :src="Joueur.image" :alt="Joueur.pseudo">
            </div>
        </section>
    
        <section class="section-compte info-compte">
            <div>
                <h5>{{Joueur.pseudo}}#{{Joueur.id}}</h5>
                <h5>{{Joueur.datenaissance}}</h5>
            </div>
        </section>
    
        <!--<section class="section-compte categorie-preferee">
            <h3>Catégories Préférées</h3>
        </section>
    
        <section class="section-compte categorie-preferee">
            <h3>Jeux préférés</h3>
            <div>
                <img src="css/images/Jeux/AventureduRail.png" alt="">
                <img src="css/images/Jeux/Memoire44.png" alt="">
                <img src="css/images/Jeux/Monopoly.png" alt="">
            </div>
        </section>-->
        <section class="section-bouton-centre">
            <router-link class="green bouton typo-white" to="Ludotheques">Mes Ludothèques</router-link>
        </section>
    </div>
    `,
    data(){
        return{
            Joueur:{}
        }
    },
    mounted(){
        axios.get(backEnd.getMembreByPseudo+'?pseudo='+this.$route.query.id)
            // Réponse promise et récupération des résultats

            .then(response => {
                this.Joueur = response.data;
                console.log("joueur = ", this.Joueur);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{

    }
})


