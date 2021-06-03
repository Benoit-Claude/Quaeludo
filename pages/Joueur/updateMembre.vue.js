let updateMembre = Vue.component('updateMembre', {
    template:`
     <div class="page Inscription">
        <h1>Modifié mon compte</h1>
        <section>
            <form id="form" @submit.prevent="submit()">
                <label class="Label-pseudo">
                    <input  type="text" 
                            name="Pseudo" 
                            v-model="membre.Pseudo"
                            maxlength="50"
                            placeholder="Pseudo"
                            onClick="this.select();"   
                            class="bouton bluegrey"
                            >
                </label>
                <br>
                <label class="Label-nom">
                    <input  type="text" 
                            name="NOM" 
                            v-model="membre.NOM"
                            maxlength="50"
                            placeholder="NOM"
                            onClick="this.select();"
                            class="bouton bluegrey"
                            >
                </label>
                <br>
                <label class="Label-prenom">
                    <input  type="text" 
                            name="Prenom" 
                            v-model="membre.Prenom"
                            maxlength="50"
                            placeholder="Prénom" 
                            onClick="this.select();"
                            class="bouton bluegrey"
                            >
                </label>
                <br>
                <label class="Label-datenaissance">
                    <input  type="date" 
                            name="datenaissance" 
                            v-model="membre.datenaissance"
                            placeholder="Date de Naissance" 
                            class="bouton bluegrey"
                            >
                </label>
                <br>
                <label class="Label-adressemail">
                    <input  type="email" 
                            name="AdresseMail"
                            v-model="membre.AdresseMail"
                            maxlength="50"
                            placeholder="Adresse mail"
                            onClick="this.select();"
                            class="bouton bluegrey"
                            >
                </label>
                <br>
                <label class="Label-mdp">
                    <input  type="password" 
                            name="Mdp" 
                            id="password"
                            v-model="membre.Mdp"
                            maxlength="50"
                            placeholder="Mot-de-passe" 
                            onClick="this.select();"
                            class="bouton bluegrey"
                            >
                </label>
                <br>
                <label class="Label-confirmationmpd">
                    <input  type="password" 
                            id="confirm_password"
                            name="ConfirmationMdp" 
                            maxlength="50"
                            placeholder="Confirmation Mot-de-passe"
                            onClick="this.select();"
                            class="bouton bluegrey"
                            >
                </label>  
                </br>
                <!--<label
                    <select class="Label-categorie bouton bluegrey typo-grey" v-model="membre.IDCategorie" >
                        <option v-for="categorie in listeCategories" id="IDCategorie"  :value="categorie.id">
                        {{categorie.nom}}
                        </option>
                    </select>  
                </label>  -->
                </br>
                <label>   
                    <input  type="checkbox" 
                            class="green"
                            id="casenewletter"
                            name="scales">
                        Je veux recevoir gratuitement par mail la newsletter.
                    </input>    
                </label>
                <br>      
                <label class="Label-valider">
                    <input type="submit" value="Modifier" class="bouton green typo-white">
                </label>
            </form>
        </section>
        
    </div>
    `,
    data(){
        return{
            listeCategories:[],
            membre:{Pseudo:null, NOM:null, Prenom:null, datenaissance:null, AdresseMail:null, Mdp:null},

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

        axios.get(backEnd.getMembre+'?id='+this.$route.query.id)
            // Réponse promise et récupération des résultats

            .then(response => {
                this.membre = response.data;
                console.log("joueur = ", this.membre);
            })

            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods: {
        submit:function (){
                //Objet FormData pour le passage de paramètre
                let params = new FormData();
                //ajout des parametres
                params.append("Pseudo",         this.membre.Pseudo);
                params.append("NOM",            this.membre.NOM);
                params.append("Prenom",         this.membre.Prenom);
                params.append("datenaissance",  this.membre.datenaissance);
                params.append('AdresseMail',    this.membre.AdresseMail);
                params.append("Mdp",            this.membre.Mdp);

                axios.post(backEnd.updateMembre, params)
                    .then(response =>{
                        console.log("retour de la promesse : ", response);
                        ///redirection sur la liste des potions
                        this.$router.push('/compte?pseudo='+localStorage.pseudo);
                    })

                    .catch(error => {
                        console.log('Erreur : ', error);
                    })


            }
        }

})