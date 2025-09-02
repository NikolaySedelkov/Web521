/*
    API - Aplication Programm Interface - интерфейс программы - функционал приложения
*/

fetch('https://swapi.info/api/films').then(
    // Колбек удачного запроса
    // Что делать, если запрос выполнился успешно

    res => res.json()
).then(
    data => console.log(data)
)
.catch(
    // колбек неудачного запроса
    // Что делать, если запрос выполнился не успешно

    () => alert("Ошибка!")
)