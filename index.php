<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance To Center</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($hotels as $hotel) {
                        $name = $hotel["name"];
                        $description = $hotel["description"];
                        $parking = $hotel["parking"];
                        $vote = $hotel["vote"];
                        $distance = $hotel["distance_to_center"];
                        
                        echo "<tr>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $description . "</td>";
                        echo $parking ===  true ? "<td class=green>" . "YES" . "</td>" : "<td class=red>" . "NO" . "</td>";
                        echo "<td>" . $vote . "/5" . "</td>";
                        echo "<td>" . $distance . " km" . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>