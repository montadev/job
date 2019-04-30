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

     protected $info;

     public function __construct(){

     	$this->uploadPathCv=public_path('demand/cv');
     	$this->uploadPathPhoto=public_path('demand/profile_img');
     } 



/***** show from to save profile ****/
     public function index(){
         
         
          $contrats=Contract::all();   
          $chooses=Choose::all();
          $etudes=Etude::all();
     	 return view ('demand.profile')->with('contrats',$contrats)
     	                               ->with('chooses',$chooses)
     	                               ->with('etudes',$etudes);
     	                              
     }


/**handle between save and upate profil ****/
     public function saveUpdateProfile(profleRequest $request){


           /** replace with auth user*/
             $user=User::find(1);
             if($user->profile==NULL)
             {
              $this->saveProfile($request);
              Alert::success('Votre Profile a éte bien enregistré');
              return redirect()->back();
             }else
             {
                return 'hello';
             }
           


     }

/**** save all profile *****/
     public function saveProfile($request){

     	 
     	    
     	  
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

             
             	  
     }

/**** save cv for each candidate ****/
     public function saveCv($request){

     	     $cv=$request->file('cv');
             $cvNme=$cv->getClientOriginalName();

             $newCvName=time().$cvNme;

             $destination=$this->uploadPathCv;
             $cv->move($destination,$newCvName);

             return $newCvName;
     }

/**save phto for candidate ****/
     public function savePhoto($request){

     	     $photo=$request->file('photo');

     	     if($photo!=NULL)
     	     {
             $phtoNme=$photo->getClientOriginalName();

             $newPhotoName=time().$phtoNme;

             $destination=$this->uploadPathPhoto;
             $photo->move($destination,$newPhotoName);

             return $newPhotoName;
             }else
             {
             return 'user_profile_anynoms.png';
             }
     }

/****save formation for each candidate ***/
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

/***** save experince for each candidate ****/
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

/*** show form to update profile ***/
   public function showUpdateProfile(){


         /** replace with auth user*/
          $user=User::find(1);
           
          $contrats=Contract::all();   
          $chooses=Choose::all();
          $etudes=Etude::all();
   	  return view('demand.updateProfile')->with('contrats',$contrats)
     	                               ->with('chooses',$chooses)
     	                               ->with('etudes',$etudes)
     	                               ->with('user',$user);
   }



/*** show dashbord ***/
   public function dashbord(){

    /** replace with auth user*/
          $user=User::find(1);
          $profile_status=$user->profile;
         
   	   return view('demand.dashbord')->with('profile_status',$profile_status);
   }

/** show resume for each candidate ****/
   public function resume(){
      
      $user=User::find(1);
   	 return view('demand.resume')->with('user',$user);
   }


}
