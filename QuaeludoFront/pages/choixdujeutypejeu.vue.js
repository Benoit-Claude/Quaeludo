var ChoixDuJeuTypeJeu = Vue.component('ChoixDuJeuTypeJeu',{
    template:`
    <div class="page">
    <section ID="Type-Jeu">
        <div>
            <h1 class="typo-green">Un jeu de ...</h1>
        </div>
        <div>
            <div class="carte">
                <div class="carte-logo">
                    <div class="carte-logo-gauche">
                        <img class="logo-carte1" src="images/Logo/logo.png" alt="logo">
                    </div>
                    <div class="carte-logo-droit">
                        <img class="logo-carte2" src="images/Logo/logo.png" alt="logo">
                    </div>
                </div>
                <div class="bouton">
                    <router-link to="choixdujeutempsjeu" class="green typo-white">Suivant</router-link>
                </div>
            </div>
        </div>
        <div class="bouton">
            <router-link to="choixdujeugroupe" class="green typo-white">Précédent</router-link>
        </div>
    </section>
</div>

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
