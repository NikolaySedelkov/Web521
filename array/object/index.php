<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Объект в php выступает в роли ассоциативного массива

    Ассоциативного массива - это массив где элементы хранятся не по индексу, а по ключу
    <pre>
        <code>
        /**
            $obj = [
                1 => 'first',
                'second' => 2,
                true => false
            ]
        */
        </code>
    </pre>
    Указываем соответвие для значения
    
    <pre>
        <code>
            /**
                $obj[1] // 'first'
                $obj['second'] // 2
                $obj[true] // false
             */
        </code>
    </pre>
</body>
</html>