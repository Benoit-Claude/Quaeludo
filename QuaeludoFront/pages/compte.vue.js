let Compte = Vue.component('Compte',{
    template:`
    <div class="page Compte">
        <section class="section-image-haut-page">
            <div class="section-compte-image-compte">
                <img src="images/Contact/avatar-benoit.png" alt="">
            </div>
        </section>
    
        <section class="section-compte info-compte">
            <div>
                <h5>Pseudo#id</h5>
                <h5>Âge</h5>
            </div>
        </section>
    
        <section class="section-compte categorie-preferee">
            <h3>Catégories Préférées</h3>
            <div>
                <p class="bouton"><a href="" class="red typo-white">Aventure</a></p>
                <p class="bouton"><a href="" class="red typo-white">Stratégie</a></p>
                <p class="bouton"><a href="" class="red typo-white">Hasard</a></p>
            </div>
        </section>
    
        <section class="section-compte categorie-preferee">
            <h3>Jeux préférés</h3>
            <div>
                <img src="images/Jeux/AventureduRail.png" alt="">
                <img src="images/Jeux/Memoire44.png" alt="">
                <img src="images/Jeux/Monopoly.png" alt="">
            </div>
        </section>
        <section>
            <div class="bouton"><router-link to="Ludotheque" class="typo-white green" style="font-size: 30px;">Mes ludothèques</router-link></div>
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
