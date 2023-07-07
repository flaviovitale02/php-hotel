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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hotels</title>
</head>
<body>
    <div class="d-flex justify-content-center m-3">
        <h1>
            Hotel list
        </h1>
    </div>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        Description
                    </th>
                    <th scope="col">
                        Parking
                    </th>
                    <th scope="col">
                        Vote
                    </th>
                    <th scope="col">
                        Distance to center
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $singleHotel){?> 
                    
                        <tr>
                        <th scope="row"><?php echo $singleHotel['name']?></th>
                        <td><?php echo $singleHotel['description']?></td>
                        <td><?php echo $singleHotel['parking']?></td>
                        <td><?php echo $singleHotel['vote'] . '<i class="fa-solid fa-star"></i>'?></td>
                        <td><?php echo $singleHotel['distance_to_center'] . 'km'?></td>
                        </tr>
                        
                    
                <?php }?>
            </tbody>
        </table>
</body>
</html>
