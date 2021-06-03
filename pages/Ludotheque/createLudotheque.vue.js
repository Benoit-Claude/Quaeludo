let createLudotheque = Vue.component('createLudotheque',{
    template:`
    <div class="page creation-ludotheque">
        <section>
            <h1>Je crée une ludothèque</h1>
            <form id="form" @submit.prevent="submit()" class="centre">
                <label>
                    <input type="text"
                           name="NOM"
                           v-model="ludotheque.NOM"
                           maxlength="50"
                           placeholder="Nom de votre ludothèque"
                           class="bouton bluegrey"
                           required>
                </label>
                </br>
                <label>
                    <input type="text"
                           name="Desc"
                           v-model="ludotheque.Desc"
                           maxlength="500"
                           placeholder="Description de votre ludothèque"
                           class="bouton bluegrey">
                </label>
                </br>
                <select class="Label-categorie" class="bouton bluegrey typo-grey" v-model="ludotheque.IDCategorie" required>
                    <option v-for="categorie in listeCategories" id="IDCategorie"  :value="categorie.id">
                    {{categorie.nom}}
                    </option>
                </select>
                    <label class="Label-valider">
                        <input type="submit" value="Créer" class="bouton green typo-white">
                    </label>
            </form>
        </section>
    </div>
    `,
    data(){
        return{
            listeCategories:[],
            ludotheque:{NOM:null, Desc: null, IDJoueur: null},
            joueur:{}

        }
    },
    mounted(){
        axios.post(backEnd.getMembreByPseudo+'?pseudo='+localStorage.pseudo)
            .then(response => {
                this.joueur = response.data;
                console.log("joueur = ", this.joueur);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })

        axios.get(backEnd.ListeCategorie)

            .then(response => {
                this.listeCategories = response.data;
                console.log("listeCategorie", this.listeCategories);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods: {
        submit:function (){
            let params = new FormData();
            params.append("NOM", this.ludotheque.NOM);
            params.append("Desc", this.ludotheque.Desc);
            params.append("IDJoueur", this.joueur.id);


            axios.post(backEnd.createLudotheque, params)
                .then(response =>{
                    console.log("retour de la promesse : ", response);
                    ///redirection sur la liste des potions
                    this.$router.push('/ludotheques');

                })

                .catch(error => {
                    console.log('Erreur : ', error);
                })
        }
    }

})