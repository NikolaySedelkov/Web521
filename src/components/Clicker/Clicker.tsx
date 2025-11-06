import { FC, useState } from "react"

const Clicker: FC<ClickerProps> = ({
    defaultValue = 0,
    step = 1
}) => {
    const [value, setValue] = useState(defaultValue);
    
    return (
        <div style={{display: 'flex'}}>
            <button onClick={() => setValue(value - step)}>-</button>
            {value}
            <button onClick={() => setValue(value + step)}>+</button>
        </div>
    )
}

interface ClickerProps {
    defaultValue?: number
    step?: number
}