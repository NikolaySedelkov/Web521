const mas = [1, 2, 3, 4, 5, 6, 7];

function filter(mas, coondition) {
    const result = [];

    for(const item of mas) {
        if(coondition(item)) result.push(item);
    }

    return result;
}

// Отфильтровал массив оставить только четные значения
{
    const result = [];

    for(const item of mas) {
        if(item % 2 === 0) result.push(item);
    }

    alert(result);
}

// Отфильтровать массив оставив только простые числа
{
    const result = [];

    for(const item of mas) {
        
        let isSimple = true;
        for(let i = 2; i < item; ++i) {
            if(item % i === 0) {
                isSimple = false;
                break;
            }
        }

        if(isSimple) result.push(item);

    }

    alert(result);
}