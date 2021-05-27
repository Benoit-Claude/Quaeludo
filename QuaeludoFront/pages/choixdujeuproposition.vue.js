var ChoixDuJeuProposition = Vue.component('ChoixDuJeuProposition',{
    template:`
    <div class="page">
        <section ID="Proposition-Jeu">
            <div>
                <h1 class="typo-green">Voici ce que nous vous proposons</h1>
            </div>
            <div class="slider">
                <div class="carte">
                    <div class="carte-logo">
                        <div class="carte-logo-gauche">
                            <img class="logo-carte1" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                        <div class="carte-logo-droit">
                            <img class="logo-carte2" src="css/images/Logo/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="bouton">
                        <router-link to="jeu" class="bouton green typo-white">Suivant</router-link>
                    </div>
                </div>
            </div>   
            <div class="bouton">
                <router-link to="choixdujeutempsjeu" class="bouton green typo-white">Précédent</router-link>
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
