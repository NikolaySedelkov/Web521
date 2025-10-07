import { Route, Routes } from 'react-router-dom'
import Main from '../components/pages/Main'
import City from '../components/pages/City'
import OneCity from '../components/pages/OneCity'
import AddCity from '../components/pages/AddCity'

export default function Routing() {
    return (
        <Routes>
            <Route
                path='/'
                element={<Main/>}
            />

            <Route
                path='/actor'
            >
                <Route
                    path=':actorId'
                />
                <Route
                    path='add'
                />
            </Route>

            <Route
                path='/city'
                element={<City/>}
            >
                
            </Route>

            <Route
                path='/city/add'
                element={<AddCity/>}
            />

            <Route
                path='/city/:cityId'
                element={<OneCity/>}
            />
        </Routes>
    )
}