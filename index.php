<?php
echo "  1 : créé un nouveau projet ? \n 2 : modifier la structure des fichier créé pour chaque projet ? (Bientôt disponible) \n 3 : m'envoyer votre avi sur cette outil ? \n 3 : rechèrcher des mise a joure \n que souhaitez vous faire ? (1)";
$action = readline();
echo $action;
if ($action === "") {
    $action = "1";
}
if ($action == 1) {
    require "./creat_project/index.php";
} else {
    echo "  cette action n'est pas encor disponible, elle le sera dans une future mise a joure ";
}
