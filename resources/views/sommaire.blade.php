@extends ('modeles/visiteur')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
             </div>  
               <ul id="menuList">
                   <li >
                    <strong>Bonjour {{ $nom. ' ' . $prenom }}</strong>

                   </li>
 
                  <li class="smenu">
                     <a href="{{ route('chemin_gestionFrais')}}" title="Acceuil ">Acceuil</a>
                  </li>
                  <li class="smenu">
                    <a href="{{ route('chemin_ajout') }}" title="AfficheVisiteur">Ajouter visiteurs</a>
                  </li>
                  <li class="smenu">
                    <a href="{{ route('chemin_selectionMois') }}" title="AfficheVisiteur">Modifier visiteurs</a>
                  </li>
                <li class="smenu">
                    <a href="{{ route('chemin_selectionMois') }}" title="AfficheVisiteur">Supprimer visiteurs</a>
                  </li>
                  
                  <li class="smenu">
                    <a href="{{ route('chemin_selectionMois') }}" title="AfficheVisiteur">Modifier etat fiches de frais</a>
                  </li>

                 
                  <li class="smenu">
                <a href="{{ route('chemin_archive') }}" title="Archive">Archive visiteurs</a>
                  </li>
                  <li class="smenu">
                <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter">Déconnexion</a><!-- Accompleter -->

                  </li>
                </ul>
        </div>
    @endsection          