import React, { useEffect, useState } from "react"
import { useDispatch } from "react-redux";
import { incrementByAmount } from "../../store/slices/counterSlice";

function Bonus() {
    const [position, setPosition] = useState();
    const [isVisible, setStateVisible] = useState(false);

    const dispatch = useDispatch();

    useEffect(
        () => {
            const id = setInterval(
                () => {
                    setStateVisible(true);

                    setPosition({
                        top: Math.round(Math.random() * 500) + 200,
                        left: Math.round(Math.random() * 500) + 200
                    })

                    setTimeout(
                        () => {
                            setStateVisible(false);
                        }, 1_000
                    )
                }, 5_000
            )

            return () => {
                clearInterval(id);
            }
        }, []
    )

    if(!isVisible) return null;

    return (
        <button
            style={{
                position: 'fixed',
                ...position
            }}
            onClick={
                () => {
                    dispatch(incrementByAmount(100));
                }
            }
        >
            +100
        </button>
    )
}

export default Bonus;