let createMembre = Vue.component('createMembre',{
    template:`
     <div class="page Inscription">
        <h1>Je m'inscris</h1>
        <section>
            <form action="" method="post">
                <label class="Label-pseudo">
                    <input type="text" name="Pseudo" placeholder="Pseudo" onClick="this.select()" class="bouton bluegrey">
                </label>
                <br>
                <label class="Label-nom">
                    <input type="text" name="NOM" placeholder="NOM" onClick="this.select()" class="bouton bluegrey">
                </label>
                <br>
                <label class="Label-prenom">
                    <input type="text" name="Prenom" placeholder="Prénom" onClick="this.select()" class="bouton bluegrey">
                </label>
                <br>
                <label class="Label-datenaissance">
                    <input type="date" name="datenaissance" placeholder="Date de Naissance" onClick="this.select()"
                           class="bouton bluegrey">
                </label>
                <br>
                <label class="Label-adressemail">
                    <input type="email" name="AdresseMail" placeholder="Adresse mail" onClick="this.select()"
                           class="bouton bluegrey">
                </label>
                <br>
                <label class="Label-mdp">
                    <input type="password" name="Mdp" placeholder="Mot-de-passe" onClick="this.select()"
                           class="bouton bluegrey">
                </label>
                <br>
                <label class="Label-confirmationmpd">
                    <input type="password" name="ConfirmationMdp" placeholder="Confirmation Mot-de-passe"
                           onClick="this.select()" class="bouton bluegrey">
                </label>  
                <br>   
                <label for="">   
                    <input type="checkbox" id="casementionslegale" name="scales">
                        En cliquant sur S’inscrire, vous acceptez nos <router-link to="Mentionslegales" class="typo-blue">Conditions générales</router-link>. Découvrez comment nous recueillons, utilisons et partageons vos données en lisant notre <router-link to="Mentionslegales" class="typo-blue">Politique d’utilisation des données</router-link> et comment nous utilisons les cookies et autres technologies similaires en consultant notre <router-link to="Mentionslegales" class="typo-blue">Politique d’utilisation des cookies</router-link>. Vous recevrez peut-être des notifications par mail de notre part et vous pouvez à tout moment <router-link to="Desabonner" class="typo-blue">vous désabonner</router-link>.
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

        }
    },
    mounted(){
        axios

    },
    methods: {

    }

})