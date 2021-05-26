let Desabonner = Vue.component('Desabonner',{
    template:`
    <div class="page seDesabonner">
        <section>
            <h2 style="margin-bottom: 0;">Tu veux te désabonner ?</h2>
            <h3 style="margin-top: 0; font-size: 18px; font-weight: normal">Et bien tu n'as plus qu'à décocher la case si dessous et cliquer sur Mettre à jour.</h3>
            <input type="checkbox" id="casementionslegale" name="scales" checked>
            <label for="casementionslegale" class="label-casementionlegale">Je souhaîte recevoir des mails de la part de <router-link
                    :to="{name: 'Accueil'}">QuaeLudo</router-link>.</label>
            <br/>
            <label class="Label-valider bouton">
                <input type="submit" value="Mettre-à-jour" class="green typo-white">
            </label>
        </section>
    </div>


    
    
    
    
    
    `,
    data(){

    },
    mounted(){

    },
    methods:{

    }})