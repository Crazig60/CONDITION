<?php
$Nom_animal = ($_POST['valeur']);
    if ($Nom_animal == 'souris')
        {
            echo 'Médor est une petite souris'; 
        }
    elseif ($Nom_animal == 'girafe')
            {
                echo 'Médor est une girafe';
            }
        elseif ($Nom_animal == 'éléphant')
                {
                    echo 'Médor est un éléphant';
                }
            elseif ($Nom_animal == 'chien')
                    {
                        echo 'Médor est un chien';
                    }
                else
                    {
                        echo 'Non, non, non Médor n\'est pas un(e) '. $Nom_animal . ', mais un chien';
                    }
?>
<p><a href="index.html">retour</a></p>