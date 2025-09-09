import { useDispatch, useSelector } from "react-redux"
import { increment } from "./store/slices/counterSlice";
import Bonus from "./components/Bonus/Bonus";

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

  return (
    <>
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

export default App
