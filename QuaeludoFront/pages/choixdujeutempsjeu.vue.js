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
                            <option class="temps"  value="00:15:00">15 min</option>
                            <option class="temps"  value="00:30:00">30 min</option>
                            <option class="temps"  value="00:45:00">45 min</option>
                            <option class="temps"  value="01:00:00">1h</option>
                            <option class="temps"  value="01:30:00">1h30</option>
                            <option class="temps"  value="02:00:00">2h</option>
                            <option class="temps"  value="03:00:00">3h</option>
                            <option class="temps"  value="24:00:00">+ de 3h</option>
                        </select>
                    </div>
                    <input type="button" class="green bouton" @click="choixdutemps">Suivant</input>
                </div>
            </div>
        </section>
        <router-link class="green bouton precedent"  to="choixdujeutypejeu">Précédent</router-link>
    </div>
    `,
    data(){
        return{
            temps:{dureemax:null}
        }
    },
    mounted(){

    },
    methods:{

        choixdutemps(){
            let select = document.getElementById("temps-jeu");
            let choice = select.value;
            console.log("choix", choice);
            router.push('choixdujeuproposition');
            localStorage.setItem('tempsmax', choice);



        }

    }
})