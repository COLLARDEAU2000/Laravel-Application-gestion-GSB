@extends ('sommaire')
    @section('contenu1')
    <div id="contenu">
        <h2>Ajout visiteur : </h2>
        <form action="{{ route('chemin_enregistrementVisiteur') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
            <fieldset>
                <legend>Remplir les champs du formulaire </legend><br><br>
                <p><label>ID : </label><input type="text"   size="20" placeholder="Saisir l'identifiant" required minlength="4" maxlength="4" name="idVisiteurAjout"/></p>
                <p><label>Nom  : </label> <input type="text"   size="20" placeholder="Saisir nom" required minlength="5" maxlength="30"  name="nomVisiteurAjout"/></p>
                <p><label>Prenom  : </label> <input type="text"   size="20" placeholder="Saisir prenom" required minlength="5" maxlength="30" name="prenomVisiteurAjout"/></p>
                <p><label>Adresse : </label> <input type="text"   size="20" placeholder="Saisir adresse" required minlength="5" maxlength="30" name="adresseVisiteurAjout"/></p>
                <p><label>Code postal : </label> <input type="text"   size="20" placeholder="Saisir code postal" required minlength="5" maxlength="5" name="codePostalVisiteurAjout"/></p>
                <p><label>Ville : </label> <input type="text"   size="20" placeholder="Saisir ville" name="villeVisiteurAjout"/></p>
                <p><label>Date d'embauche : </label> <input type="date"  value="2000-04-26" size="20" placeholder="Saisir d'embauche" name="dateEmbaucheVisiteurAjout"/></p>
                <p><label>Role : </label> <input type="number"  required min="0" max="2" name="roleVisiteurAjout"/></p>
                <p>
                    <input id="ok" type="submit" value="Valider" size="20" />
                    <input id="annuler" type="reset" value="Effacer" size="20" />
                </p> 
            </fieldset>
        </form>
    </div>
    @endsection 