let createAjoutJeux = Vue.component('createAjoutJeux', {
    template: `
     <div class="page Inscription">
        <h1>Ajout d'un jeu</h1>
        <section>
            <form id="form" @submit.prevent="submit()">
                
                <label>
                    <select class="Label-categorie bouton bluegrey typo-grey" v-model="ajoutjeux.IDLudotheque" required>
                        <option v-for="ludotheque in listeLudotheques" id="IDludotheque"  :value="ludotheque.id">
                        {{ludotheque.nom}}
                        </option>
                    </select>  
                </label>  
                </br> 
                <label>
                    <select class="Label-categorie bouton bluegrey typo-grey" v-model="ajoutjeux.IDJeux" required>
                        <option v-for="jeux in listeJeux" id="IDJeux"  :value="jeux.id">
                        {{jeux.nom}}
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
            listeLudotheques: [],
            listeJeux:[],
            ajoutjeux:{IDLudotheque:null,
                      IDJeux:null}

        }
    },
    mounted() {
        axios.get(backEnd.getLudothequeByPseudo+'?pseudo='+localStorage.pseudo)

            .then(response => {
                this.listeLudotheques = response.data;
                console.log("Liste ludotheque", this.listeLudotheques);
            })

            .catch(error => {
                console.log("Erreur : ", error);
            })
        axios.get(backEnd.ListeJeux)

            .then(response => {
                this.listeJeux = response.data;
                console.log("Liste jeux", this.listeJeux);
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
            params.append("IDLudotheque", this.ajoutjeux.IDLudotheque);
            params.append("IDJeux", this.ajoutjeux.IDJeux);


            axios.post(backEnd.createAjoutJeux, params)
                .then(response => {
                    console.log("retour de la promesse : ", response);
                    ///redirection sur la liste des potions
                    this.$router.push('/Ludotheques');

                })

                .catch(error => {
                    console.log('Erreur : ', error);
                })
            }

    }

})