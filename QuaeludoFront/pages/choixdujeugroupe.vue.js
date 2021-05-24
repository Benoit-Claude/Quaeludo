var ChoixDuJeuGroupe = Vue.component('ChoixDuJeuGroupe',{
    template:`
    <div class="page">
        <section id="Groupe-Jeu section-haut-page">
            <div>
                <h1 class="typo-green">Avec qui ?</h1>
            </div>
            <div>
                <div class="carte" v-for="groupe in listegroupes" :key="groupe.id">
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="images/Logo/logo.png" alt="logo">
                        </div>
                        <h1 class="typo-green">{{groupe.nomgroupe}}</h1>
                        <p class="typo-blackgrey"></p>
                    </div>
                    <div class="bouton">
                        <router-link to="choixdujeutypejeu" class="green typo-white">Suivant</router-link>
                    </div>
                </div>
            </div>
        </section>
    </div>
    `,
    data(){
        return{
            listegroupes:[]
        }
    },
    mounted(){
        axios.get('http://localhost:8888/')
            // Réponse promise et récupération des résultats
        .then(response => {
            this.listegroupes = response.data;
            console.log("listeGroupes = ", this.listegroupes);
        })

        .catch(error =>{
            console.log("Erreur : ", error);
        })
    },
    methods:{

    }
})
