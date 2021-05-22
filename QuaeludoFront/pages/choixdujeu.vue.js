var ChoixDuJeu = Vue.component('ChoixDuJeu',{
    template:`
    <div class="page">
    <section id="Groupe-Jeu">
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
                    <a href="choixdujeu.vue.js#Type-Jeu" class="green typo-white">Suivant</a>
                </div>
            </div>
        </div>
    </section>

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
                    <a href="ChoixDuJeu.html#Temps-Jeu" class="green typo-white">Suivant</a>
                </div>
            </div>
        </div>
        <div class="bouton">
            <a href="ChoixDuJeu.html#Groupe-Jeu" class="green typo-white">Précédent</a>
        </div>
    </section>

    <section ID="Temps-Jeu">
        <div>
            <h1 class="typo-green">Je peux jouer pendant ...</h1>
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
                    <a href="ChoixDuJeu.html#Attente" class="green typo-white">Suivant</a>
                </div>
            </div>
        </div>
        <div class="bouton">
            <a href="ChoixDuJeu.html#Type-Jeu" class="bouton green typo-white">Précédent</a>
        </div>
    </section>

    <section ID="Attente">
        <div>
            <h1 class="typo-green">Un instant ...</h1>
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
                    <a href="ChoixDuJeu.html#Proposition-Jeu" class="green typo-white">Suivant</a>
                </div>
            </div>
        </div>
        <div class="bouton">
            <a href="ChoixDuJeu.html#Temps-Jeu" class="bouton green typo-white">Précédent</a>
        </div>
    </section>

    <section ID="Proposition-Jeu">
        <div>
            <h1 class="typo-green">Voici ce que nous vous proposons</h1>
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
                    <a href="Jeu.html" class="green typo-white">Je prend celui là</a>
                </div>
            </div>
        </div>
        <div class="bouton">
            <a href="ChoixDuJeu.html#Temps-Jeu" class="bouton green typo-white">Précédent</a>
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
