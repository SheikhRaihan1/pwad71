import React, {  } from 'react'
import { useUserContext } from '../../context/UserContext';


const Dashboard = () => {

  const user= useUserContext();

  console.log(user);
  
  return (
    <div>Dashboard</div>
  )
}

export default Dashboard