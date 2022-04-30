@extends ('sommaire')
    @section('contenu1')
    <div id="contenu">
        <h2>Ajout visiteur : </h2>
        <form action="{{ route('chemin_enregistrementVisiteur') }}" method="post">
            <fieldset>
                <legend>Remplir les champs du formulaire </legend><br><br>
                <label>ID : <input type="text"   size="20" placeholder="Saisir l'identifiant" required minlength="4" maxlength="4" name="idVisiteurAjout"></label></p>
                <label>Nom  : <input type="text"   size="20" placeholder="Saisir nom" required minlength="5" maxlength="30"></label name="nomVisiteurAjout"></p>
                <label>Prenom  : <input type="text"   size="20" placeholder="Saisir prenom" required minlength="5" maxlength="30" name="prenomVisiteurAjout"></label></p>
                <label>Adresse : <input type="text"   size="20" placeholder="Saisir adresse" required minlength="5" maxlength="30" name=adresseVisiteurAjout></label></p>
                <label>Code postal : <input type="text"   size="20" placeholder="Saisir code postal" required minlength="5" maxlength="5" name=codePostalVisiteurAjout></label></p>
                <label>Ville : <input type="text"   size="20" placeholder="Saisir ville" name=villeVisiteurAjout></label></p>
                <label>Date d'embauche : <input type="date"  value="2000-04-26" size="20" placeholder="Saisir d'embauche" name=dateEmbaucheVisiteurAjout></label></p>
                <label>Role : <input type="number"  required min="1" max="3" name=roleVisiteurAjout></label></p>
                <p>
                    <input id="ok" type="submit" value="Valider" size="20" />
                    <input id="annuler" type="reset" value="Effacer" size="20" />
                </p> 
            </fieldset>
        </form>
    </div>
    @endsection 