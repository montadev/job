<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            'photo'=>'mimes:jpeg,jpg,png|max:10000',           
            'cv'=>'mimes:pdf|required|max:10000',
            'post_desire'=>'required',
            'domaine'=>'required',
            'competences'=>"required",
            'adresse'=>"required",
            'objectifs'=>"required",
            'tel'=>"required|digits:8",

           
        ];
    }


     public function messages()
            {
                return [
                    'photo.required' => 'Veuillez saisir votre Photo',
                    'photo.mimes' => 'Le type d\'image doit:jpeg,jpg,png',
                    'photo.max'  => 'L\'image doit etre inférieur a 10000 ko',
                    'cv.required' => 'Veuillez saisir votre Cv',
                    'cv.mimes' => 'Le type de Cv doit:pdf',
                    'cv.max'  => 'Votre cv doit etre inférieur a 10000 ko',
                    'post_desire.required'=>'Veuillez saisir votre Post désiré',
                    'domaine.required' => 'Veuillez au moins un domaine',
                    'competences.required' => 'Veuillez au moins une competence',
                    'adresse.required' => 'Veuillez Saisir votre adresse',
                    'tel.required' => 'Veuillez Saisir votre telephone',
                    'tel.digits' => 'Votre telephone doit contenir 8 nombres',
                    'objectifs.required' => 'Veuillez saisir votre Objectif',

                ];
            }
}
