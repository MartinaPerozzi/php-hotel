<!-- Array di Hotels -->
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TITLE -->
	<title>PHP Hotel</title>
	<!-- LINK -->

	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Boostrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- Style -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
		<div class="container">

            <h1 class="font-bold text-center pt-5 text-lg">Prenota il tuo Hotel</h1>
            <div class="flex flex-col p-5">
                <table class="min-w-full text-left font-light">
                    <thead>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700 text-center">
                            <th scope="col" class="p-4">Hotel </th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($hotels as $hotel){?> 
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-center"> <?= $hotel['name']?></td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-center"><?= $hotel['parking']?></td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-center"><?= $hotel['vote']?></td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-center"><?= $hotel['distance_to_center'] . " " . "km" ?></td>
                                </tr>
                                
                                <?php }?>
                    </tbody>
                </table>
            </div>

		</div>
	
</body>

</html>