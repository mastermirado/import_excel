<?php

namespace App\Services;

use App\Entity\Import;

class ImportService {
    // method mapping
    const MAPPING = [
        'businessAccount','eventAccount','lastEventAccount','fileNumber','title','CurrentVehicleOwner',
        'lastname','firstname','street','addressSupplement','zip','city','homePhone','mobilePhone',
        'workPhone','email','firstRegistrationDate','purchaseDate','lastEventDate','mark',
        'model','version','vin','registration','prospectType','miles','energy','sellerVN',
        'sellerVO','invoiceComment','typeVNVO', 'fileNumberVNVO', 'salesIntermediary','eventDate','eventOrigin',
    ];


    // Create entity import from data
    public static function makeImportEntity($data = []){
        $import = new Import();
        foreach($data as $key => $value){
            $method = 'set' . self::MAPPING[$key];
            $import->$method($value);
        }

        return $import;
    }
}