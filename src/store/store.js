import { configureStore } from "@reduxjs/toolkit";
import counterSlice from "./slices/counterSlice";
import userSlice from "./slices/userSlice";
import timerSlice from "./slices/timerSlice";

const store = configureStore({
    reducer: {
        counter: counterSlice,
        user: userSlice,
        timer: timerSlice
    }
});

export default store;