<?php

namespace App\Http\Controllers;

use App\Choose;
use App\Contract;
use App\Etude;
use App\Profile;
use App\Formation;
use App\Experience;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\profleRequest;
use Alert;

class profileController extends Controller
{
    
     protected $uploadPathCv;
     protected $uploadPathPhoto;

     public function __construct(){

     	$this->uploadPathCv=public_path('demand/cv');
     	$this->uploadPathPhoto=public_path('demand/profile_img');
     } 


     public function index(){

          $contrats=Contract::all();   
          $chooses=Choose::all();
          $etudes=Etude::all();
     	 return view ('demand.profile')->with('contrats',$contrats)
     	                               ->with('chooses',$chooses)
     	                               ->with('etudes',$etudes);
     }

     public function saveProfile(profleRequest $request){

     	 
     	    
     	  
     	   $profile=new Profile();
     	   
     	   
           $newCvName=$this->saveCv($request);
           $newPhtoName=$this->savePhoto($request);
           $profile->cv=$newCvName;
           $profile->photo=$newPhtoName;
           $profile->description=$request->objectifs;
     	   $profile->post=$request->post_desire;
     	   $profile->competence=$request->competences;
     	   $profile->adress=$request->adresse;
     	   $profile->tel=$request->tel;
     	   $profile->permis=$request->permis;
     	   $profile->motorise=$request->motorise;
     	   $profile->user_id=1;
     	   $profile->contract_id=$request->contrat;
     	   $profile->etude_id=$request->niveau_etude;
           
           $profile->save(); 
           
            
           
           

           $profile->chooses()->attach($request->domaine);


          // will be replaced by auth  don't forget that//
           $last_id=$profile->id;
           $this->saveFormation($request,$last_id);
           $this->saveExperience($request,$last_id);

             Alert::success('Votre Profile a éte bien enregistré');


              return redirect()->back();
             	  
     }

     public function saveCv($request){

     	     $cv=$request->file('cv');
             $cvNme=$cv->getClientOriginalName();

             $newCvName=time().$cvNme;

             $destination=$this->uploadPathCv;
             $cv->move($destination,$newCvName);

             return $newCvName;
     }


     public function savePhoto($request){

     	     $photo=$request->file('photo');
             $phtoNme=$photo->getClientOriginalName();

             $newPhotoName=time().$phtoNme;

             $destination=$this->uploadPathPhoto;
             $photo->move($destination,$newPhotoName);

             return $newPhotoName;
     }


    public function saveFormation($request,$last_id){


    	  $nb_Formation=count($request->diplome);
              
            
           for ($i=0; $i < $nb_Formation ; $i++) { 
           	
           $formation=new Formation();
           $formation->diplome=$request->diplome[$i];
           $formation->universite=$request->universite[$i];
           $formation->date_debut=$request->from[$i];
           $formation->date_fin=$request->to[$i];
           $formation->description=$request->desc_form[$i];
           $formation->profile_id=$last_id;

           $formation->save();


           }
    }


    public function saveExperience($request,$last_id){

       $nb_Experience=count($request->entreprise);
              
            
           for ($i=0; $i < $nb_Experience ; $i++) { 
           	
           $experience=new Experience();
           $experience->entreprise=$request->entreprise[$i];
           $experience->position=$request->position[$i];
           $experience->date_debut=$request->from_post[$i];
           $experience->date_fin=$request->to_post[$i];
           $experience->description=$request->desc_post[$i];
           $experience->profile_id=$last_id;

           $experience->save();


           }

    }


   public function getResume()
   {

      $user=User::find(1);

      return view('demand.resume')->with('user',$user)
                                  ->render();
   }


}
