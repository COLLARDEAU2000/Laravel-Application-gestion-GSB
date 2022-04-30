<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDO;

class ajoutVisiteur extends Controller
{

    function AfficheFormulaireAjout(Request $request)
    {
        if( session('visiteur') != null)
        {
            $visiteur = session('visiteur');
            $idVisiteur = $visiteur['id'];
            $roleVisiteur = $visiteur['role'];
            $prenom = $visiteur['prenom'];
            $nom = $visiteur['nom'];
            if($roleVisiteur == 1)//permet d'afficher l'acceuil du gestionnaire
            {
                
                return view('ajoutFormulaire')
                ->with('roleVisiteur',$roleVisiteur)
                ->with('nom',$nom)
                ->with('prenom',$prenom)
                ->with('visiteur',$visiteur); 
            }
            else
            {
                return view('connexion')->with('erreurs',null);
            }
        }
    }


    function enregistrementVisiteur(Request $request)
    {
        if( session('visiteur')!= null)
        {
            //Gestionnaire 
            $visiteur = session('visiteur');
            $roleVisiteur=$visiteur['role'];
            $prenom = $visiteur['prenom'];
            $nom = $visiteur['nom'];


            //Ajout visiteur dans la table visiteur 
            if($roleVisiteur==1)
            {
                //recuperation des informations du visiteurs a ajouter
                $id=$request['idVisiteurAjout'];
                $prenom=$request['prenomVisiteurAjout'];
                $nom=$request['nomVisiteurAjout'];
                $login=$request['login'];
                $mdp=$request['mdp'];
                $adresse=$request['adressePostalVisiteurAjout'];
                $cp=$request['codePostalVisiteurAjout'];
                $ville=$request['villeVisiteurAjout'];
                $date_embauche=$request['dateEmbaucheVisiteurAjout'];
                $role=$request['roleVisiteurAjout'];

                //Ajout visiteur
                $verificationEtatFiche = PdoGsb::getInfoFicheFraisVisiteurLibelle($indentifiantVisiteurASupprimer );


                // verification que le visiteur a ete ajouter
                $verificationEtatFiche = PdoGsb::getInfoFicheFraisVisiteurLibelle($indentifiantVisiteurASupprimer );

                return view('ajoutFormulaire')
                ->with('roleVisiteur',$roleVisiteur)
                ->with('nom',$nom)
                ->with('prenom',$prenom)
                ->with('visiteur',$visiteur); 
            }
               
        }
        else
        {
            return view('connexion')->with('erreurs',null);
        }
    }





    


}














