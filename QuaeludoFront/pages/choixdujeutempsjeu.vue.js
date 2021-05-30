var ChoixDuJeuTempsJeu = Vue.component('ChoixDuJeuTempsJeu',{
    template:`
    <div class="page Page-choixdujeu">
        <section>
            <div>
                <h1 class="typo-green">Pendant...</h1>
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
                        
                    <h1 class="typo-green">Tu as max :</h1>
                    <div class="carte-p">
                        <select name="time" id="temps-jeu">
                            <option value="00:15:00">15 min</option>
                            <option value="00:30:00">30 min</option>
                            <option value="00:45:00">45 min</option>
                            <option value="01:00:00">1h</option>
                            <option value="01:30:00">1h30</option>
                            <option value="02:00:00">2h</option>
                            <option value="03:00:00">3h</option>
                            <option value="24:00:00">+ de 3h</option>
                        </select>
                    </div>
                    <router-link class="green bouton precedent" to="choixdujeuproposition">Suivant</router-link>
                </div>
            </div>
        </section>
        <router-link class="green bouton precedent" to="choixdujeutypejeu">Précédent</router-link>
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