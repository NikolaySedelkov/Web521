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
// Массивы, разнотивные, - каждый элемент может иметь какой-то конретный. это массивы конкретной длины!
const turple: [number, string, undefined] = [1, "2", undefined];
// useState -> [value, (value) => void]

// Функции
/**
 *  (par1: TYPE1, par2: TYPE2, par3: TYPE3, ....) => RETURN_TYPE
 */
function plus(a: number, b: number) {
    return a + b;
} 
const handle: (a: number, b: number) => number = plus;

// Объекты
const _obj: { x: number } = { x: 2 };

// Объявление типа для объекта состоящего из полей up и down, каждое из который имеет тип number
type Decimal = {
    up: number,
    down: number,
    // children?: Decimal[]
}
const _decimal: Decimal = { up: 1, down: 7 };

interface IDecimal {
    up: number,
    down: number,
    // children?: IDecimal[]
}

interface IRealDecimal extends IDecimal {
    // znak: boolean;
    znak: '+' | '-' 
}

const _realDecimal: IRealDecimal = {
    up: 12,
    down: 2,
    znak: '+'
}

// Тип, который может иметь любой ключ, но важно чтобы ключом была именно строка, и по значение по этому ключу было число
type UniversaleObject = {
    [key: string]: number
}

const _universaleObj: UniversaleObject = {
    x: 1,
    yyy: 12222,
    'dsfsd_ d': -1,
    // 5: 1,
    // 'Hello': 'world!'
}

// Generics - возможность работы с динамичским типом
// Параметр функции - тип
function findMax<T>(
    numbers: T[], 
    compare: (a: T, b: T) => boolean
): T | undefined {
    if(!numbers.length) return undefined

    return numbers.reduce(
        (curr, acc) => compare(curr, acc) ? curr : acc,
        numbers.at(0)!
    )
}