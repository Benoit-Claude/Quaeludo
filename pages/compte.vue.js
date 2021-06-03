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
        <hr>
        <section class="barre-nav-joueur">
            <router-link :to="{path: '/updateMembre', query:{id:Joueur.id}}" :key="Joueur.id" >
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" class="svg-inline--fa fa-user-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg>
            </router-link>
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
        <section v-if="localStorage.pseudo != null">
            <div class="red bouton typo-blackgrey" @click="deconnection">Deconnexion</div>
        </section>
        
</section>
    </div>
    `,
    data(){
        return{
            Joueur:{}
        }
    },
    mounted(){
         axios.get(backEnd.getMembreByPseudo+'?pseudo='+localStorage.pseudo)
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


