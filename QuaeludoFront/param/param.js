const host = 'http://localhost:8888/Quaeludo/QuaeludoBack/'



let backEnd = {
    //cnx
    'cnx':  host+'cnx.php',
    'path': host+'path.php',


    //Categorie
    'ListeCategorieClasseJeu': host+'ListeCategorieClasseJeu.php',
    'ListeCategorie': host+'ListeCategories.php',
    'getCategorie': host+'getCategorie.php',


    //Groupe
    'ListeGroupeRegroupeJoueur': host+'ListeGroupeRegroupeJoueur.php',
    'ListeGroupe': host+'ListeGroupes.php',
    'getGroupe': host+'getGroupe.php',
    'creategroupe': host+'createGroupe.php',
    'getGroupeByPseudo': host+'getGroupeByPseudo.php',
    'createAjoutMembre': host+'createAjoutMembre.php',


    //Jeu
    'ListeJeuContenuLudo': host+'ListeJeuContenuLudo.php',
    'ListeJeux': host+'ListeJeux.php',
    'getJeux': host+'getJeux.php',


    //Ludotheque
    'ListeLudotheque': host+'ListeLudotheques.php',
    'getLudotheque': host+'getLudotheque.php',
    'getLudothequeByPseudo': host+'getLudothequeByPseudo.php',
    'createLudotheque': host+'createLudotheque.php',
    'createAjoutJeux': host+'createAjoutJeux.php',


    //Joueur
    'ListeJoueurPossedeLudo': host+'ListeJoueurPossedeLudo.php',
    'ListeMembre' : host+'listeMembres.php',
    'getMembre': host+'getMembre.php',
    'getMembreByPseudo': host+'getMembreByPseudo.php',
    'getMembrelogin': host+'getMembreLogin.php',
    'createMembre': host+'createMembre.php',
    'login': host+'login.php',
    'inscription': host+'inscription.php',

}