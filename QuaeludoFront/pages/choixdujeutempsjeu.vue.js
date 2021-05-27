var ChoixDuJeuTempsJeu = Vue.component('ChoixDuJeuTempsJeu',{
    template:`
    <div class="page">
        <section ID="Temps-Jeu">
            <div>
                <h1 class="typo-green">Je peux jouer pendant ...</h1>
            </div>
            <div>
                <div class="carte" >
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="images/Logo/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="bouton">
                        <router-link to="choixdujeuproposition" class="bouton green typo-white">Suivant</router-link>
                    </div>
                </div>
            </div>
            <div class="bouton">
                <router-link to="choixdujeutypejeu" class="bouton green typo-white">Précédent</router-link>
            </div>
        </section>
    `,
    data(){
        return{

        }
    },
    mounted(){

    },
    methods:{

    }
})