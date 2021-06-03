let createGroupe = Vue.component('createGroupe',{
    template:`
    <div class="page creation-groupe">
        <section>
            <h1>Je crée un groupe</h1>
            <form id="form" @submit.prevent="submit()" class="centre">
                <label>
                    <input type="text"
                           name="NOM"
                           v-model="groupe.NOM"
                           maxlength="50"
                           placeholder="Nom de votre groupe"
                           class="bouton bluegrey"
                           required>
                </label>
                </br>
                <label>
                    <input type="text"
                           name="Desc"
                           v-model="groupe.Desc"
                           maxlength="500"
                           placeholder="Description de votre groupe"
                           class="bouton bluegrey">
                </label>
                </br>
               
                <label class="Label-valider">
                    <input type="submit" value="Créer" class="bouton green typo-white">
                </label>
            </form>
        </section>
    </div>
    `,
    data(){
        return{
            groupe:{NOM:null, Desc: null},
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
    },
    methods: {
        submit:function (){
            let params = new FormData();
            params.append("NOM", this.groupe.NOM);
            params.append("Desc", this.groupe.Desc);
            params.append("IDJoueur", this.joueur.id);

            axios.post(backEnd.creategroupe, params)
                .then(response =>{
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