const a = parseInt(prompt("Введите числитель", "0") ?? '0');
const b = parseInt(prompt("Введите знаменатель", "0") ?? '0');

console.log(a / b);


// Примитивы
let _number: number; // Числа -2, -1, 0, 1, 1.5, Math.sqrt(2), Math.PI
_number = 1; _number = 1.5; _number = Math.sqrt(2); // _number = false; !Ошибка

let _str: string; // Любая строка: "", "123", "Hello world!";
_str = "123"; _str = ""; _str = "Hello world!";  // _srt = 123; !Ошибка

let _boolean: boolean; // true/false
let _und: undefined = undefined; // Только undefined
// _und = 1; !Ошибка
let _null: null; // Только null
// _null = true; !Ошибка

/**
 * Можно сделать сложный тип данных
 * 
 * Пример: функция, которая принимает число, но так же может быть что число не передается(
 *  имеет значение по умолчанию
 * )
 * 
 * Функция возведения в квадрат
 * COMPOSITE_TYPE = TYPE1 | TYPE2 | TYPE3 | ... | TYPE_N;
 * 
 */
{
    function _sqrt(x: number | string) {
        const _x = Number(x);
        return _x * _x;
    }
}

{
    function _sqrt(x: number | undefined = 2) {
        return x * x;
    }
}

{
    // VAR?: TYPE: - эта запись будет означать что тип данных переменной VAR - TYPE | undefined
    function _sqrt(x?: number) {
        if(x === undefined) return undefined;
        return x * x;
    }
}

// Ссылочные типы
// Массив
//  1. Обычный массив
/**
 * Массив - в TS это набор однотивных элементов
 * Тип данных для массива элементов типа TYPE - < TYPE[] >
 */
const _numbers: number[] = [1, 2, 3] 
// Матрицы - массивы массивов, массив, элементами которого является значения типов TYPE[] -> что его тип TYPE[][]
const _matrix: string[][] = [
    ["Hello", "World"],
    ["!"]
]
const combineMatrix: (number | boolean)[] = [];

//  2. Кортеж
