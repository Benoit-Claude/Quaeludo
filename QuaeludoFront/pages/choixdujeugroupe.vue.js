var ChoixDuJeuGroupe = Vue.component('ChoixDuJeuGroupe',{
    template:`
    <div class="page">
        <section id="Groupe-Jeu section-haut-page">
            <div>
                <h1 class="typo-green">Avec qui ?</h1>
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
                        <router-link to="choixdujeutypejeu" class="green typo-white">Suivant</router-link>
                    </div>
                </div>
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