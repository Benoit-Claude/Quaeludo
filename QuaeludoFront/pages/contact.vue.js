let Contact = Vue.component('Contact',{
    template:`
    <div class="page Contact">
        <section class="section-haut-page">
            <div>
                <h1>Contact</h1>
            </div>
            <hr class="hr-titre">
            <div class="section-p">
                <p>
                    Ce projet est réalisé dans le cadre de notre formation à l'IUT Belfort-Montbéliard au département MMi, plus précisement dans le cadre du projet collectif de second semestre de 1ère année.
                </p>
                <p>
                    Nous avions pour sujet de créer un site innovant, nous avions à choisir parmi différents sujets. Nous avons choisi celui là car c'était celui qui nous inspirait le plus et que certains d'entres nous sont fans de jeux de société. C'était donc pour nous une manière de nous amuser tout en travaillant notre projet, mais aussi d'avoir des connaissances qui peuvent nous être utiles.
                </p>
                <p>
                    Pour ce projet collectif, nous sommes une équipe de 3 étudiants, Nathan, Raphaël et Benoît.
                </p>
            </div>
        </section>

        <section class="section-haut-page section-Nathan white" id="section-Nathan">
            <div>
                <img src="images/Contact/avatar_Nathan.png" class="Nathan-logo" alt="avatar Nathan">
                <h3>Nathan BAUMANN</h3>
            </div>
            <p>Je considère le web comme l'avenir de notre société. Utilisateur fréquent des réseaux sociaux et manager de plusieurs comptes, j'ai acquis des connaissances en communication et management. Étant passionné de sports mécaniques, mon rêve serait d'être pilote professionnel. <br>Je suis ainsi le responsable communication et mercatique de QuaeLudo.</p>
        </section>


        <section class="section-haut-page section-Raphael white" id="section-Raph">
            <div>
                <img src="images/Contact/avatar-raph.png" class="Raph-logo" alt="avatar Raph">
                <h3>Raphaël BONIN</h3>
            </div>
            <p>Je passe une bonne partie du temps devant mon écran pour développer, concevoir des pièces en 3D ou encore monter des vidéos, que je filme lorsque je sors avec mon matériel, dont mon drone. Mon rêve est de devenir télépilote de drone professionnel. <br>Je suis le geek de ce groupe étant le responsable développement de ce projet.</p>
        </section>

        <section class="section-haut-page section-Benoit white" id="section-Benoit">
            <div>
                <img src="images/Contact/avatar-benoit.png" class="Benoit-logo" alt="avatar Benoit">
                <h3>Benoît CLAUDE</h3>
            </div>
            <p>Passionné par l'art et la culture, j'aime créer toute sorte de contenu artistique, que ce soit du design, de la musique ou autre. J'aime partager mes passions et inviter mes amis à les partager avec moi. Mon rêve est de devenir designer, dans le graphisme ou dans le son. Le temps affinera mon choix. <br>j'ai la responsabilité de la partie design de Quaeludo.</p>
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
