var ChoixDuJeuProposition = Vue.component('ChoixDuJeuProposition',{
    template:`
    <div class="page Page-choixdujeu">
        <section>
            <div>
                <h1 class="typo-green">Voici ce que nous vous proposons</h1>
            </div>
            <div class="slider">
                <div class="carte" v-for="jeu in listeJeux" :key="jeu.id">
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                    </div>
                    <h1 class="typo-green">{{jeu.nom}}</h1>
                    <div class="carte-img">
                        <img :src="jeu.image" alt="" class="carte-p" style="width: auto">
                    </div>
                    <router-link class="green bouton precedent" :to="{names: 'Accueil'}">Je prend celui là !</router-link>
                </div>
                <div class="carte" v-if="listeJeux == null">
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                    </div>
                    <h1 class="typo-green">Aucun jeu n'a été trouvé</h1>
                    <div class="carte-p">
                        <p>Nous sommes désolé, mais aucun jeu ne correspond à votre recherche.</p>
                    </div>

                    <router-link class="green bouton precedent" to="choixdujeugroupe">Je recommence</router-link>
                </div>
            </div>
            
        </section>    
        <router-link class="green bouton precedent" to="choixdujeutempsjeu">Précédent</router-link>
    </div>
    `,
    data(){
        return{
            listeJeux:[],
        }
    },
    mounted(){
        console.log("IDgroupe = ", localStorage.groupe);
        console.log("IDCategorie = ", localStorage.categorie);
        console.log("Temps max = ", localStorage.tempsmax);

        let params = new FormData();
        //ajout des parametres
        params.append('Groupe',           localStorage.groupe);
        params.append('Categorie',        localStorage.categorie);
        params.append('TempsMax',         localStorage.tempsmax);
        console.log("pramas :", params);
        axios.post(backEnd.ListeJeuxchoix, params)
            .then(response => {
                this.listeJeux = response.data;
                console.log("listeJeux", this.listeJeux);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{



    }
})
