var ChoixDuJeuGroupe = Vue.component('ChoixDuJeuGroupe',{
    template:`
    <div class="page Page-choixdujeu">
        <section>
            <div>
                <h1 class="typo-green">Avec qui ?</h1>
            </div>
            <div class="slider">
                <div class="carte" v-for="groupe in listeGroupes" :key="groupe.id">
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                    </div>
                        
                    <h1 class="typo-green">{{groupe.nom}}</h1>
                    <div class="carte-p">
                        <p class="typo-blackgrey" v-for="joueur in groupe.lesJoueurs" :key="groupe.id">
                            {{joueur.parent.prenom}} {{joueur.parent.nom}}
                        </p>
                    </div>
                    <input type="button" class="green bouton precedent" @click="choixgroupe(groupe.id)" value="Suivant">
                </div>
            </div>
        </section>
    </div>
    `,
    data(){
        return{
            listeGroupes:[],
            groupe:{}
        }

    },
    mounted(){
        axios.get(backEnd.ListeGroupe)
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
        choixgroupe(id){
            console.log('test1');
            localStorage.setItem('groupe', id);
            router.push('choixdujeutypejeu');

            console.log("groupe sélectionné", id);
        }
    }
})