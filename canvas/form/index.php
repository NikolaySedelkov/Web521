<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/canvas/draw" method="post">
        <table>
            <thead>
                <tr>
                    <th>
                        x
                    </th>
                    <th>
                        y
                    </th>
                </tr>
            </thead>
            <tbody id="point-list">
                <tr>
                    <td>
                        <input type="number" name="x[]" min="0" required/>
                    </td>

                    <td>
                        <input type="number" name="y[]" min="0" required/>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <button id="add-point" type="button">
            добавить
        </button>

        <button>
            нарисовать
        </button>
    </form>

    <script>
        document.getElementById("add-point").addEventListener(
            'click',
            () => {
                document.getElementById("point-list").innerHTML += `
                    <tr>
                        <td>
                            <input type="number" name="x[]" min="0" required/>
                        </td>

                        <td>
                            <input type="number" name="y[]" min="0" required/>
                        </td>
                    </tr>
                `
            }
        )
    </script>
</body>
</html>