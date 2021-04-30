<?php


// Parcourir le tableau $data
// Pour chaque tableau dans $data afficher la phrase :
// "{name} est agé de {Age} ans"
// Suivi d'un retour à la ligne
// Où {name} est le nom de la personne et {Age} et l'age de cette personne
// Exemple :
// "Heikkinen, Miss. Laina est agé de 26 ans"


$data = [
    [
        "PassengerId"=> 1,
        "Survived"=> 0,
        "Pclass"=> 3,
        "Name"=> "Braund, Mr. Owen Harris",
        "Sex"=> "male",
        "Age"=> 22,
        "SibSp"=> 1,
        "Parch"=> 0,
        "Ticket"=> "A/5 21171",
        "Fare"=> 7.25,
        "Cabin"=> "",
        "Embarked"=> "S"
    ],
    [
        "PassengerId"=> 2,
        "Survived"=> 1,
        "Pclass"=> 1,
        "Name"=> "Cumings, Mrs. John Bradley (Florence Briggs Thayer)",
        "Sex"=> "female",
        "Age"=> 38,
        "SibSp"=> 1,
        "Parch"=> 0,
        "Ticket"=> "PC 17599",
        "Fare"=> 71.2833,
        "Cabin"=> "C85",
        "Embarked"=> "C"
    ],
    [
        "PassengerId"=> 3,
        "Survived"=> 1,
        "Pclass"=> 3,
        "Name"=> "Heikkinen, Miss. Laina",
        "Sex"=> "female",
        "Age"=> 26,
        "SibSp"=> 0,
        "Parch"=> 0,
        "Ticket"=> "STON/O2. 3101282",
        "Fare"=> 7.925,
        "Cabin"=> "",
        "Embarked"=> "S"
    ],
    [
        "PassengerId"=> 4,
        "Survived"=> 1,
        "Pclass"=> 1,
        "Name"=> "Futrelle, Mrs. Jacques Heath (Lily May Peel)",
        "Sex"=> "female",
        "Age"=> 35,
        "SibSp"=> 1,
        "Parch"=> 0,
        "Ticket"=> 113803,
        "Fare"=> 53.1,
        "Cabin"=> "C123",
        "Embarked"=> "S"
    ]
];














function myFunctionTitanic($data){
    foreach($data as $key => $value){
        echo($value["Name"]."est agé de ". $value["Age"]. " ans "."<br>");



    }

}



myFunctionTitanic($data);
