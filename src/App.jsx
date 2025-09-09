import { useDispatch, useSelector } from "react-redux"
import { increment } from "./store/slices/counterSlice";
import Bonus from "./components/Bonus/Bonus";
import React, { useEffect } from "react";
import { setUser } from "./store/slices/userSlice";
import Header from "./components/Header/Header";

function App() {
  // Достать значение из Redux - хук useSelector
  /**
   *  useSelector(
   *    getter - Функция, которая укажет что именно нужно вернуть
   *  ) 
   * 
   *  getter <-> state => state.sliceName.field
   *  
   *  state - Это общее состояние опеределеное в store
   *  sliceName - Название slice'а, которое дали ему в configureStore
   *  field - конкретно поле, которое нужно из конкретного slice
   */
  const count = useSelector(state => state.counter.value);
  // Хук useDispatch - возвращает специальную функцию, через которую нужно изменять состояния slice'а
  // И ТОЛЬКО ЧЕРЕЗ НЕЁ
  const dispatch = useDispatch();

  useEffect(
    () => {
      getUser()
        .then(
          user => {
            dispatch(setUser(user))
          }
        )
    }, []
  );

  return (
    <>
      <Header/>
      <Bonus/>
      <div 
        style={{
            display: 'flex' 
        }}
      >
        <button>-</button>
        <b>{count}</b>
        <button
          onClick={
            () => {
              dispatch(increment())
            }
          }
        >
          +
        </button>
      </div>
    </>
  )
}

function getUser() {
  return new Promise(
    // Дейтвие, которое будет отложено
    // В функции не должно быть return

    // Результ функции пробрасываем в специальные функции resolve, reject
    // resolve - указание на то, что действие выполнилось удачно
    // reject - указание на то, что действие выполнилось не удачно
    (resolve, reject) => {
      resolve({
        name: 'Николай',
        surname: 'Седелков'
      })
    } 
  )
}

export default App
