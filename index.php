<? 
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Overlooking breathtaking scenery, this hotel offers a luxury experience immersed in nature.',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => "An embodiment of architectural innovation and modern comfort, where the future of hospitality comes to life.",
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'With stunning sea views, this hotel enchants guests with its coastal charm and impeccable service.',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => "Enchanting and welcoming, this hotel exudes an atmosphere of warmth and authentic hospitality, with a breathtaking panoramic view.",
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'In the bustling heart of the city, this hotel combines elegance and practicality for an unforgettable stay in the capital of fashion and design.',
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
    <meta http-equiv="refresh" content="3">
    <title>PHP Hotels</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FontAwesome library import link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container mt-5">
        <?php
            // echo '<pre>';  print_r($hotels); echo '</pre>'
        ?>
        <ul>
            <?php foreach($hotels as $element): ?>
            <li>
                <?= $element['name'] ?> -
                <?= $element['description'] ?> - 
                <?= $element['parking'] ?> - 
                <?= $element['vote'] ?> - 
                <?= $element['distance_to_center'] ?> km
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    
</body>
</html>