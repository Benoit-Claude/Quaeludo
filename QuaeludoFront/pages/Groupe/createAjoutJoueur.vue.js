let createAjoutJoueur = Vue.component('createAjoutJoueur', {
    template: `
     <div class="page Inscription">
        <h1>Ajout d'un joueur</h1>
        <section>
            <form id="form" @submit.prevent="submit()">
                
                <label
                    <select class="Label-categorie bouton bluegrey typo-grey" v-model="ajoutmembre.IDGroupe" required>
                        <option v-for="groupe in listeGroupes" id="IDGroupe"  :value="groupe.id">
                        {{groupe.nom}}
                        </option>
                    </select>  
                </label>  
                </br> 
                <label
                    <select class="Label-categorie bouton bluegrey typo-grey" v-model="ajoutmembre.IDMembre" required>
                        <option v-for="membre in listeMembres" id="IDMembre"  :value="membre.id">
                        {{membre.prenom}} {{membre.nom}}
                        </option>
                    </select>  
                </label> 
                
                   
                <label class="Label-valider">
                    <input type="submit" value="Valider" class="bouton green typo-white">
                </label>
            </form>
        </section>
        
    </div>
    `,
    data() {
        return {
            listeGroupes: [],
            listeMembres:[],
            ajoutmembre:{IDGroupe:null,
                         IDMembre:null}

        }
    },
    mounted() {
        axios.get(backEnd.getGroupeByPseudo+'?pseudo='+localStorage.pseudo)

            .then(response => {
                this.listeGroupes = response.data;
                console.log("Liste groupe", this.listeGroupes);
            })

            .catch(error => {
                console.log("Erreur : ", error);
            })
        axios.get(backEnd.ListeMembre)

            .then(response => {
                this.listeMembres = response.data;
                console.log("Liste joueurs", this.listeMembres);
            })

            .catch(error => {
                console.log("Erreur : ", error);
            })
    },
    methods: {
        submit: function () {
            //Objet FormData pour le passage de paramètre
            let params = new FormData();
            //ajout des parametres
            params.append("IDGroupe", this.ajoutmembre.IDGroupe);
            params.append("IDMembre", this.ajoutmembre.IDMembre);


            axios.post(backEnd.createAjoutMembre, params)
                .then(response => {
                    console.log("retour de la promesse : ", response);
                    ///redirection sur la liste des potions
                    this.$router.push('/groupes');

                })

                .catch(error => {
                    console.log('Erreur : ', error);
                })
            }

    }

})