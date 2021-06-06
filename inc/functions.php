<?php

$data = "data/messages.txt";
// $validation= [];
// function validate($data){
//     global $validation;
// //    jeigu laukelis yra tuscias arba neatitinka sablono
//     if(empty($_POST['name']) || !preg_match('/A-Z/',$_POST['name'])){
//         $validation[] = "Vardas turi buti is didžiosios";
//     }
// }

function storeData(){
    $data = "data/messages.txt"; //nusirodome kelia iki text failo
    $content = file_get_contents($data); //nuskaitome duomenis is text failo. Failo turinys
    $formData = implode(',',$_POST); //viska, ka gauname is formos, priskiriama kintamajam formData. Konvertuojame POST masyva i string
    $content .= $formData."/n"; //prie formos duomenu pridedame eilutes pabaigos zenkla; taskas - prideti duomenis
    file_put_contents($data,$content); //irasomi duomenys i faila formos duomenys
    //var_dump($content);
}

function showData(){
    global $messages;
    global $data;
    $messages = file_get_contents($data, true); // priskiriame failo duomenis
    $messages = explode('/n',$messages); //konvertuojam tekstinio failo duomenis i masyva
    return $messages;
}
