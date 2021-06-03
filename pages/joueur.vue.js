let Joueur = Vue.component('Joueur',{
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

    </div>
    `,
    data(){
        return{
            Joueur:{}
        }
    },
    mounted(){
         axios.get(backEnd.getMembre+'?id='+this.$route.query.id)
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
        deconnection: function (){
            localStorage.removeItem('pseudo');
            router.push('/');
        }

    }
})


