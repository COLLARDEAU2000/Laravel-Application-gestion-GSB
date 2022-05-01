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
                $id=htmlspecialchars($request['idVisiteurAjout']);
                $prenomVisiteur=htmlspecialchars($request['prenomVisiteurAjout']);
                $nomVisiteur=htmlspecialchars($request['nomVisiteurAjout']);
                $login= ajoutVisiteur::genereLogin();
                $mdp=ajoutVisiteur::genereMotDePasse();
                $adresse=htmlspecialchars($request['adressePostalVisiteurAjout']);
                $cp= htmlspecialchars($request['codePostalVisiteurAjout']);
                $ville= htmlspecialchars( $request['villeVisiteurAjout']);
                $date_embauche=$request['dateEmbaucheVisiteurAjout'];
                $role=$request['roleVisiteurAjout'];
                //dd($login);
                //Ajout visiteur
                $ajout = PdoGsb::InsertNewVisiteur($id,$prenomVisiteur,$nomVisiteur,$login,$mdp,$adresse,$cp,$ville,$date_embauche,$role);
                

                // verification que le visiteur a ete ajouter
                $verificationAjoutVisiteur = PdoGsb::getChiffreNonNullVerificateurAjout($id);
                
                if($verificationAjoutVisiteur['nb']==1)
                {
                    $message = "Ajout effectuée avec succès !";
                    return view('valider')
                    ->with('nom',$nom)
                    ->with('prenom',$prenom)
                    ->with('message',$message)
                    ->with('roleVisiteur',$roleVisiteur)
                    ->with('visiteur',$visiteur); 
                }
                else
                {
                    
                    $erreurs[] = "Erreur lors de l'ajout du visiteur'.Veuillez recommencer
                    NB: Si le problème persiste signalez le à votre développeur web .
                    Merci!!!
                    ";
                    return view('erreur')
                    ->with('nom',$nom)
                    ->with('prenom',$prenom)
                    ->with('erreurs',$erreurs)                        
                    ->with('roleVisiteur',$roleVisiteur)
                    ->with('visiteur',$visiteur);                
                }
            } 
        }
        else
        {
            return view('connexion')->with('erreurs',null);
        }
    }


    function genereMotDePasse($longueur=12)
    {
    // par défaut, on affiche un mot de passe de 5 caractères
    // chaine de caractères qui sera mis dans le désordre:
    $Chaine = "abcdefghijklmnopqrstuvwxyz01234567890!@@#$%%^&**CDEFGHIJKLMNOPQRSTUVWXYZ"; // 62 caractères au total
    // on mélange la chaine avec la fonction str_shuffle(), propre à PHP
    $Chaine = str_shuffle($Chaine);
    // ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
    $Chaine = substr($Chaine,0,$longueur);
    // ensuite on retourne notre chaine aléatoire de "longueur" caractères:
    return $Chaine;
    }
    function genereLogin($longueur=2)
    {
    // par défaut, on affiche un mot de passe de 5 caractères
    // chaine de caractères qui sera mis dans le désordre:
    $Chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // 62 caractères au total
    // on mélange la chaine avec la fonction str_shuffle(), propre à PHP
    $Chaine = str_shuffle($Chaine);
    // ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
    $Chaine = substr($Chaine,0,$longueur);
    // ensuite on retourne notre chaine aléatoire de "longueur" caractères:
    return $Chaine;
    }

    


}














