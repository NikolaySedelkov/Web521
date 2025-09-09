import { createSlice } from "@reduxjs/toolkit";

// слайс - объект содержащий информацию о структуре данных и о действиях над ними
const counterSlice = createSlice({
    // Уникальный идентификатор для слайсов
    name: 'counter',
    // Структура данных + начальное значение
    initialState: {
        value: 0
    },
    // набор функций(действий) для изменения данных
    reducers: {
        // Любое действие, как функция, принимает 2 параметра
        // state - объект с текущим состоянием слайса
        // action - Информация о передаваемых параметрах в действие

        increment(state) {
            state.value += 1;
        },

        incrementByAmount(state, action) {
            // payload - значение, которое передаем в действие
            state.value += action.payload;
        }
    }
});

// Экспорт всего слайса
export default counterSlice.reducer;

// Отдельный экспорт всех действий над данными
export const {
    increment,
    incrementByAmount
} = counterSlice.actions;