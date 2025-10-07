import { useEffect, useState } from "react";

export default function useQuery(url, method = 'GET', deps = []) {
    const [data, setData] = useState();

    useEffect(
        () => {
            fetch(url, {method}).then(
                res => res.json()
            ).then(
                data => setData(data)
            )
        }, deps
    )

    return data;
}