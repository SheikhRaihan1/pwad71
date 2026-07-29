import React, { useEffect, useState } from 'react'
import SerchResult from './SerchResult';
import UserSearch from './UserSearch';
import DivWrap from './DivWrap';

const Counter = () => {
 
  const [count,setCount]= useState(100);
  const [searchValue, setSearchValue] = useState("")

  const [products, setProducts] = useState(
    [
    {id:1 , name:"Shop", price:100},
    {id:2 , name:"bag", price:1500},
    {id:3 , name:"Clock", price:2000},
    {id:4 , name:"Watch", price:5000},
  ]
  )

   useEffect(()=>{
      console.log("use Effect rendered");
      
   }, [count])


  function increaseConut(){
       setCount((abc)=> abc+2 )
     
  }
  function decreaseConut(){
       setCount((pre)=> pre-1 )
      
  }


  return (
    <>
     <div>{count}</div>
     <button onClick={increaseConut}> Increase </button>
     <button onClick={decreaseConut}> Decrease </button>

       <UserSearch  setSearchValue={setSearchValue}  searchValue={searchValue}/>
       <SerchResult  searchValue={searchValue} />


       <DivWrap>
          <div>ksdjkfjsd</div>
           
       </DivWrap>
      
    </>
  )
}

export default Counter