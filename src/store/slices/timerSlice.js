import { createSlice } from "@reduxjs/toolkit";

const timerSlice = createSlice({
    name: 'timer',
    initialState: {
        value: 0
    },
    reducers: {
        stepSec(state) {
            state.value += 1;
        }
    }
})

export default timerSlice.reducer;
export const {
    stepSec
} = timerSlice.actions;