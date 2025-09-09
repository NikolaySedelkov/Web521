import { createSlice } from "@reduxjs/toolkit";

const userSlice = createSlice({
    name: 'user',
    initialState: {
        name: undefined,
        surname: undefined,
    },
    reducers: {
        setUser(state, action) {
            state.name = action.payload.name;
            state.surname = action.payload.surname;
        }
    }
});

export default userSlice.reducer;
export const {
    setUser
} = userSlice.actions;

