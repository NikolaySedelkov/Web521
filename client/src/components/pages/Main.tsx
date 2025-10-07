import { Link } from "react-router-dom";

export default function Main() {
    return (
        <ul>
            <li><Link to='/actor'>Актеры</Link></li>
            <li><Link to='/city'>Города</Link></li>
        </ul>
    )
}