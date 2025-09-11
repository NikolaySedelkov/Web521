<?php
    $films = json_decode(
        file_get_contents('https://swapi.info/api/films'), true
    );
?>

<table>
    <caption>Фильмы о звездных войнах</caption>

    <thead>
        <tr>
            <th>Название</th>
            <th>Режисер</th>
            <th>Продюсер</th>
            <th>Дата выхода</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($films as $film) {
                echo "
                    <tr>
                        <td>".$film['title']."</td>
                        <td>".$film['director']."</td>
                        <td>".$film['producer']."</td>
                        <td>".$film['release_date']."</td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>