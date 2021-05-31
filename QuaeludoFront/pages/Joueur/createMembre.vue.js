let createMembre = Vue.component('createMembre',{
    template:`
     <div class="page Inscription">
        <h1>Je m'inscris</h1>
        <section>
            <form id="form" @submit.prevent="submit()">
                <label class="Label-pseudo">
                    <input  type="text" 
                            name="Pseudo" 
                            v-model="membre.Pseudo"
                            maxlength="50"
                            placeholder="Pseudo"   
                            class="bouton bluegrey"
                            required>
                </label>
                <br>
                <label class="Label-nom">
                    <input  type="text" 
                            name="NOM" 
                            v-model="membre.NOM"
                            maxlength="50"
                            placeholder="NOM" 
                            class="bouton bluegrey"
                            required>
                </label>
                <br>
                <label class="Label-prenom">
                    <input  type="text" 
                            name="Prenom" 
                            v-model="membre.Prenom"
                            maxlength="50"
                            placeholder="Prénom" 
                            class="bouton bluegrey"
                            required>
                </label>
                <br>
                <label class="Label-datenaissance">
                    <input  type="date" 
                            name="datenaissance" 
                            v-model="membre.datenaissance"
                            placeholder="Date de Naissance" 
                            class="bouton bluegrey"
                            required>
                </label>
                <br>
                <label class="Label-adressemail">
                    <input  type="email" 
                            name="AdresseMail"
                            v-model="membre.AdresseMail"
                            maxlength="50"
                            placeholder="Adresse mail"
                            class="bouton bluegrey"
                            required>
                </label>
                <br>
                <label class="Label-mdp">
                    <input  type="password" 
                            name="Mdp" 
                            id="mdp"
                            v-model="membre.Mdp"
                            maxlength="50"
                            placeholder="Mot-de-passe" 
                            class="bouton bluegrey"
                            required>
                </label>
                <br>
                <label class="Label-confirmationmpd">
                    <input  type="password" 
                            id="mpd-confirmation"
                            name="ConfirmationMdp" 
                            maxlength="50"
                            placeholder="Confirmation Mot-de-passe"
                            class="bouton bluegrey"
                            required>
                </label>  
                </br>
                <label
                    <select class="Label-categorie" class="bouton bluegrey typo-grey" v-model="membre.IDCategorie" required>
                        <option v-for="categorie in listeCategories" id="IDCategorie"  :value="categorie.id">
                        {{categorie.nom}}
                        </option>
                    </select>  
                </label>  
                </br>
                <label for="">   
                    <input  type="checkbox" 
                            class="green"
                            id="casementionslegale" 
                            name="scales"
                            required>
                        En cliquant sur S’inscrire, vous acceptez nos <router-link to="Mentionslegales" class="typo-blue">Conditions générales</router-link>.
                    </input>  
                    </br>
                    <input  type="checkbox" 
                            class="green"
                            id="casenewletter" 
                            name="scales">
                        Je veux recevoir gratuitement par mail la newsletter.
                    </input>    
                </label>
                <br>      
                <label class="Label-valider">
                    <input type="submit" value="S'inscrire" class="bouton green typo-white">
                </label>
            </form>
        </section>
    </div>
    `,
    data(){
        return{
            listeCategories:[],
            membre:{Pseudo:null, NOM:null, Prenom:null, datenaissance:null, AdresseMail:null, Mdp:null, IDCategorie: null},

        }
    },
    mounted(){
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
            //Objet FormData pourn le passage de paramètre
            let params = new FormData();
            //ajout des parametres
            params.append("Pseudo",         this.membre.Pseudo);
            params.append("NOM",            this.membre.NOM);
            params.append("Prenom",         this.membre.Prenom);
            params.append("datenaissance",  this.membre.datenaissance);
            params.append('AdresseMail',    this.membre.AdresseMail);
            params.append("Mdp",            this.membre.Mdp);
            params.append("IDCategorie",    this.membre.IDCategorie);

            axios.post(backEnd.createMembre, params)
                .then(response =>{
                    console.log("retour de la promesse : ", response);
                    ///redirection sur la liste des potions
                    this.$router.push('/connexion');

                })

                .catch(error => {
                    console.log('Erreur : ', error);
                })
        }
    }

})