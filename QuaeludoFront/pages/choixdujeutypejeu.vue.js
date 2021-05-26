var ChoixDuJeuTypeJeu = Vue.component('ChoixDuJeuTypeJeu',{
    template:`
    <div class="page">
        <section id="Groupe-Jeu section-haut-page">
            <div>
                <h1 class="typo-green">Un jeu de ...</h1>
            </div>
            <div>
                <div class="carte" v-for="categorie in listeCategories" :key="categorie.id">
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                    </div>
                        
                        <h1 class="typo-green">{{categorie.nom}}</h1>
                    
                    <div class="bouton">
                        <router-link to="choixdujeutempsjeu" class="green typo-white">Suivant</router-link>
                    </div>
                </div>
                <div class="bouton">
                    <router-link to="choixdujeugroupe" class="green typo-white">Précédent</router-link>
                </div>
            </div>
        </section>
    </div>

    `,

    data(){
        return{
            listeCategories:[]
        }
    },
    mounted(){
        axios.get('http://localhost:8888/Quaeludo/QuaeludoBack/ListeCategories.php')

            .then(response => {
                this.listeCategories = response.data;
                console.log("listeCategorie", this.listeCategories);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{

    }

})
