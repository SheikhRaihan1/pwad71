import axios from 'axios';
import React, { useContext, useEffect, useState } from 'react'
import { NavLink, Link } from 'react-router-dom';
import { apiPrivate } from '../../api/api';
import { UserDataContext } from '../../context/UserContext';

const CustomerIndex = () => {

 const [customers, setCustomers]= useState([]);
 const baseUrl= import.meta.env.VITE_API_BASE_URL;
 const photoUrl= import.meta.env.VITE_PHOTO_BASE_URL;

 function fetchcustomer(){

    apiPrivate({
        url:`/customer/`,
        method:"get",
        data:{} 
     })
     .then((res)=>{
        console.log(res.data);
        setCustomers(res.data.customer)
     })
     .catch((err)=>{
        console.log(err);
     })
  }

  useEffect(()=>{
   fetchcustomer()
  },[])


  function deleteCustomer(id){
    
    axios({
         url:`${baseUrl}/customer/deletefdfs/${id}`,
         method:"delete",
         data:{}
    })
    .then(res=>{
        console.log(res.data);
        fetchcustomer();
    //    let Mcustomers= customers.filter((c)=> c.id != id)
    //    setCustomers(Mcustomers);
    })
    .catch(err=>{
        console.log(err);   
    })



  }

  if(customers.length > 0){
    return (
    <>
        <Link className='btn btn-primary' to={"/customer/create"}> Create Customer </Link>
       <br />
      <table>
        <thead>
  <tr>
             <th>id</th>
             <th>name</th>
             <th>mobile</th>
             <th>photo</th>
             <th>action</th>
         </tr>
        </thead>
        <tbody>
         {
           customers.map((customer, index)=>(
               <tr key={customer.id}>
                <th>{++index}</th>
                <th>{customer.name}</th>
                <th>{customer.mobile}</th>
                <th>  <img  width={100} src={`${photoUrl}/${customer.photo}`} alt="" srcset="" /> </th>
                <th> 
                    <Link className='btn btn-info' to={`/customer/edit/${customer.id}`}>Edit</Link> 
                    <Link onClick={()=> confirm("are you sure") && deleteCustomer(customer.id)} className='btn btn-danger'>Delete</Link>
                    </th>
              </tr>
           ))

         }
         </tbody>
      </table>
    </>
  )
  }

  
}

export default CustomerIndex