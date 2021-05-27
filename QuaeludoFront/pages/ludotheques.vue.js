let Ludotheques = Vue.component('Ludotheques',{
    template:`
    <div class="page Ludotheque">
    <h1>Mes ludothèques</h1>
    <section class="section-haut-page liste">
        <div class="section-liste-choix"  v-for="ludotheque in listeLudotheques" :key="ludotheque.id">
            <img src="" height="62" width="62" alt="">
            <div class="info-nom-ludo">
                <h3>{{ludotheque.nom}}</h3>
                <hr>
                <div class="info-ludo">
                    <p>{{ludotheque.lesJeux.length}}</p>
                    <br/>
                    <p>{{ludotheque.idjoueur}}</p>
                </div>
            </div>
            <svg focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 fleche" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
        </div>
    </section>
    </div>
    `,
    data(){
        return{
            listeLudotheques:[]
        }

    },
    mounted(){
        axios.get('http://localhost:8888/Quaeludo/QuaeludoBack/ListeLudotheques.php')
            // Réponse promise et récupération des résultats
            .then(response => {
                this.listeLudotheques = response.data;
                console.log("listeLudotheques = ", this.listeLudotheques);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })

        axios.get('http://localhost:8888/Quaeludo/QuaeludoBack/ListeCategorie.php')
            .then(response => {
                this.listeCategories = response.data;
                console.log("listeCategorie = ", this.listeCategories);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{

    }
})