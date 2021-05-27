let Groupes = Vue.component('Groupes',{
    template:`
    <div class="page Groupes">
        <div>
            <h1>Mes Groupes</h1>
        </div>
        <section class="section-haut-page liste">
            <router-link to="groupe" class="section-liste-choix" v-for="groupe in listeGroupes" :key="groupe.id">
                <img :src="groupe.image" height="62" width="62" alt="">
                <div class="info-nom-ludo">
                    <h3>{{groupe.nom}}</h3>
                    <hr>
                    <div class="info-ludo">
                        <p>{{groupe.lesJoueurs.length}}</p>
                        <br/>
                        <p>{{groupe.nom}}</p>
                    </div>
                </div>
                <svg focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 fleche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
        </router-link>
        </section>
    </div>
    `,
    data(){
        return{
            listeGroupes:[]
        }

    },
    mounted(){
        axios.get('http://localhost/Quaeludo/QuaeludoBack/ListeGroupes.php')
            // Réponse promise et récupération des résultats
            .then(response => {
                this.listeGroupes = response.data;
                console.log("listeGroupes = ", this.listeGroupes);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{

    }
})


