let Connexion = Vue.component('Connexion',{
    template:`
    <div class="page Connexion">
        <h1>Je me connecte</h1>
        <section>
            <form method="post">
            
                <label class="Label-pseudo">
                    <input type="username" class="bluegrey bouton" name="username" v-model="input.username" onClick="this.select();" placeholder="Username" />
                </label>
                <br>
                <label class="Label-nom">
                    <input type="password" class="bluegrey bouton" name="password" v-model="input.password" onClick="this.select();" placeholder="Password" />
                </label>
                <br>
                <label class="Label-valider">
                    <input type="button" value="Se connecter" @click="login" class="bouton green typo-white">
                </label>
            </form>
            <p>Pas de compte ?? Inscrit toi <router-link class="typo-blue" to="createMembre">ici</router-link>.</p> 
        </section>
    </div>
`,
    data(){
        return {
            input: {
                username: "",
                password: ""
            },
            joueur: {}
        }
    },
    mounted(){

    },
    methods:{
        getJoueur(cb){
            let params = new FormData();
            params.append("username", this.input.username);
            params.append("password", this.input.password);
            axios.post(backEnd.getMembrelogin+'?pseudo='+this.input.username, params)
                .then(response => {
                    this.joueur = response.data;
                    console.log("joueur = ", this.joueur);
                    cb(response);
                })

                .catch(error => {
                    console.log('Erreur : ', error);
                })
        },

        login() {
            if(this.input.username !== "" && this.input.password !== "") {
                this.getJoueur(({data})=>{
                    console.log("pseudo =", data.pseudo);
                    console.log("Pseudo renté = ", this.input.username);
                    if((data.pseudo === this.input.username)) {
                        console.log("mdp bdd = ", data.mdp);
                        console.log("mdp rentré = ", this.input.password);
                        if ((data.mdp === this.input.password)){
                            localStorage.pseudo = data.pseudo;
                            router.push('/');
                            console.log('bon');
                        }else{
                            router.push('/connexion');
                            console.log('faux - mot de passe incorrect');
                        }
                    }else{
                        router.push('/connexion');
                        console.log('faux');
                    }
                })
                // si joueur existe



                /*this.$emit("button", {
                    username: this.username,
                    password: this.password
                }, true);
                console.log("test", this.$emit);
                console.log("test2", this.$emit.password);
                this.$router.replace({name: "secure" });*/
            } else {
                console.log("The username and / or password is incorrect");
            }
        }
    }
})