import { Link } from "react-router-dom";
import useQuery from "../../hooks/useQuery";

export default function City() {
    const cities = useQuery("/api/city");

    return (
        <>
            <Link to='/city/add'>Добавить новый город</Link>
            <ul>
                {
                    cities?.map(city => (
                        <li key={city.id}>
                            <Link to={`/city/${city.id}`}>
                                {city.name}
                            </Link>
                        </li>
                    ))
                }
            </ul>
        </>
    )
}