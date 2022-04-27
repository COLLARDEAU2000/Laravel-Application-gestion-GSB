@extends ('sommaire2')
    @section('contenu1')
    <div id="contenu">
        <h2>Ajout visiteur : </h2>
        <h3>Remplir les champs du formulaire  </h3>
        <form action="{{ route('chemin_listeFrais') }}" method="post">
            <p><label>ID : <input type="text"  value="" size="20" placeholder="Saisir l'identifiant"></label></p>
            <p><label>Nom  : <input type="text"  value="" size="20" placeholder="Saisir nom"></label></p>
            <label>Prenom  : <input type="text"  value="" size="20" placeholder="Saisir prenom"></label></p>
            <label>Adresse : <input type="text"  value="" size="20" placeholder="Saisir adresse"></label></p>
            <label>Code postal : <input type="text"  value="" size="20" placeholder="Saisir code postal"></label></p>
            <label>Ville : <input type="text"  value="" size="20" placeholder="Saisir ville"></label></p>
            <label>Date d'embauche : <input type="text"  value="" size="20" placeholder="Saisir d'embauche"></label></p>
            <label>Role : <input type="text"  value="" size="20" placeholder="Saisir role"></label></p>
        </form>
    </div>
    <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
          <input id="annuler" type="reset" value="Effacer" size="20" />
        </p> 
    </div>
@endsection 