<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media voti Alunni</title>
</head>
<body>

    <?php

    $alunni = [

        ['nome'=> 'Mario',
         'cognome'=> 'Geracitano',
         'voti'=> [
            'voto1' => 2,
            'voto1' => 10,
            'voto1' => 6,
         ]
         ],
         ['nome'=> 'Sofia',
         'cognome'=> 'Rossi',
         'voti'=> [
            'voto1' => 8,
            'voto1' => 6,
            'voto1' => 6,
         ]
         ],
         ['nome'=> 'Luca',
         'cognome'=> 'Fanci',
         'voti'=> [
            'voto1' => 6,
            'voto1' => 7,
            'voto1' => 7,
         ]
         ],
         ['nome'=> 'Beatrice',
         'cognome'=> 'Sarri',
         'voti'=> [
            'voto1' => 7,
            'voto1' => 10,
            'voto1' =>9,
         ]
         ],
         ['nome'=> 'Davide',
         'cognome'=> 'Baglioni',
         'voti'=> [
            'voto1' => 8,
            'voto1' => 10,
            'voto1' => 10,
         ]
         ]

         ];

    ?>

        <ul>
            <?php
                for($i = 0; $i < count($alunni); $i++){
                    $alunnoCorrente = $alunni[$i];
                    echo    "<li>" . $alunnoCorrente['nome'] . 
                    " - " . $alunnoCorrente['cognome'] . 
                    " | " . $alunnoCorrente['puntiCasa'] . 
                    " - " . $alunnoCorrente['voti'] . 
                    "</li>";


                }
            ?>
        </ul>
        

    
</body>
</html>