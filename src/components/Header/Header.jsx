import React from 'react'
import { useSelector } from "react-redux"

function Header() {
    const user = useSelector(state => state.user);

    return (
        <div
            style={{
                width: 'max-context',
                padding: '10px',
                borderRadius: '7px',
                backgroundColor: 'lightcoral'
            }}
        >
            {user.name} {user.surname}
        </div>
    )
}

export default Header;