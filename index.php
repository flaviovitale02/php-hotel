<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php foreach ($hotels as $singleHotel){?> 
        <p>
            <?php echo $singleHotel['name']?>
            <?php echo $singleHotel['description']?>
            <?php echo $singleHotel['parking']?>
            <?php echo $singleHotel['vote']?>
            <?php echo $singleHotel['distance_to_center']?>
        </p>
    <?php }?>
    
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($hotels as $singleHotel){?> 
            
                <tr>
                <th scope="row"><?php echo $singleHotel['name']?></th>
                <td><?php echo $singleHotel['description']?></td>
                <td><?php echo $singleHotel['parking']?></td>
                <td><?php echo $singleHotel['vote']?></td>
                <td><?php echo $singleHotel['distance_to_center']?></td>
                </tr>
                
            
    <?php }?>
    </tbody>
        </table>
</body>
</html>
