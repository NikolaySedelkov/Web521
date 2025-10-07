import { useParams } from "react-router-dom";
import useQuery from "../../hooks/useQuery";

export default function OneCity() {
    const { cityId } = useParams();

    const city = useQuery(`/api/city/by-id?id=${cityId}`, 'GET', [cityId]);

    if(city === undefined) return null;

    return (
        <>
            <h1>{city.city}</h1>
            <h2>Страна: {city.country}</h2>

            <h3>Адреса</h3>
            <ul>
                {
                    city.address.map(addres => (
                        <li key={addres.id}>
                            {addres.address}
                        </li>
                    ))
                }
            </ul>
        </>
    )
}