<?php
echo "Créé un nouveau projet. \n saisisez le nom du projet :";
$name = readline();
echo $name;
echo "Saisisez le chemain du dossier dans le quelle vous souhaitez créé votre projet (si le dossier cible porte déjà le nom du projet le projet sera créé à l'intérieur, dans le cas échèant le dossier portant le nom de votre projet sera créé) :";
$path = readline();
