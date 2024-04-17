<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dolgozat</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <h2>Dolgozat</h2>
    <br>
    <?php
        $nev = ["Kiss Jóska", "Kiss Pista", "Nagy Ernő"];
        $klubnev = ["Focizgatás FC", "El Tipro FC", "Halószaggató FC"];
        $maximalisMeret = [];
        for ($i=0; $i < 3; $i++) {
            array_push($maximalisMeret, rand(10,100));
        }
        for ($i=0; $i < count($klubnev); $i++) {
            echo $nev[$i], "," . $klubnev[$i], "," . $maximalisMeret[$i] . "<br>";
        }

        // táblázat

        echo "<h2>Táblázatba rendezve: </h2>";
        for ($i=0; $i < 3; $i++) { 
            echo "<table>
                        <tr>
                            <th>Név:</th>
                            <th>Klub neve:</th>
                            <th>Maximális méret:</th>
                        </tr>
                        <tr>
                            <td>$nev[$i]</td>
                            <td>$klubnev[$i]</td>
                            <td>$maximalisMeret[$i]</td>
                        </tr>
                </table>";
        }

    ?>
</body>
</html>