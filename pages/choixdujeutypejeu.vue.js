var ChoixDuJeuTypeJeu = Vue.component('ChoixDuJeuTypeJeu',{
    template:`
    <div class="page Page-choixdujeu">
        <section>
            <div>
                <h1 class="typo-green">Un jeu de ...</h1>
            </div>
            <div class="slider">
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
                    <div class="carte-img">
                        <img src="css/images/Des/dice-five-solid.svg" :alt="categorie.nom" class="image-carte">
                     </div>
                     <input type="button" class="green bouton precedent" @click="choixcategorie(categorie.id)" value="Suivant">
                </div>
            </div> 
        </section>
        <router-link class="green bouton precedent" to="choixdujeugroupe">Précédent</router-link>
    </div>
    `,
    data(){
        return{
            listeCategories:[]
        }
    },
    mounted(){
        console.log('localstorage', localStorage.getItem('groupe'));
        axios.get(backEnd.ListeCategorie)

            .then(response => {
                this.listeCategories = response.data;
                console.log("listeCategorie", this.listeCategories);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{
        choixcategorie(id){

            localStorage.setItem('categorie', id);
            router.push('choixdujeutempsjeu');

        }
    }

})
