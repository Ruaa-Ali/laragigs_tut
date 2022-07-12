<?php 

namespace App\Models;

class Listing{

    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'loremExercitation non laborum aliqua officia et culpa magna. Commodo labore minim consequat fugiat proident ea velit et nisi magna culpa officia eu. Quis in ut nulla laboris excepteur fugiat consequat.'
            ],

            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'loremExercitation non laborum aliqua officia et culpa magna. Commodo labore minim consequat fugiat proident ea velit et nisi magna culpa officia eu. Quis in ut nulla laboris excepteur fugiat consequat.'
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
