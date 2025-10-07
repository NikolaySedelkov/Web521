import { useNavigate } from "react-router-dom";
import useQuery from "../../hooks/useQuery"

export default function AddCity() {
    const counries = useQuery('/api/country');

    const navigate = useNavigate();

    return (
        <form
            onSubmit={
                e => {
                    e.preventDefault();

                    fetch('/api/city/add', {
                        method: 'POST',
                        body: new FormData(e.target)
                    }).then(
                        () => {navigate('/city')}
                    )   
                }
            }
        >
            <table>
                <caption> Создать новый город </caption>
                <tbody>
                    <tr>
                        <td>
                            Название
                        </td>
                        <td>
                            <input required name='name'/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Страна
                        </td>
                        <td>
                            <select required name='country_id'>
                                {
                                    counries?.map(
                                        country => (
                                            <option key={country.id} value={country.id}>
                                                {country.name}
                                            </option>
                                        )
                                    )
                                }
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button>Сохранить</button>
        </form>
    )
}