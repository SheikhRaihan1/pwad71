import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import heroImg from './assets/hero.png'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import Layout from './layout/Layout'
import Dashboard from './pages/dashboard/Dashboard'
import 'bootstrap/dist/css/bootstrap.min.css'
import IndexRole from './pages/role/IndexRole'
import CreateRole from './pages/role/CreateRole'
import EditRole from './pages/role/EditRole'
import Counter from './pages/dashboard/Counter'
import CustomerIndex from './pages/customer/CustomerIndex'
import CreateCustomer from './pages/customer/CreateCustomer'
import EditCustomer from './pages/customer/EditCustomer'


function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <BrowserRouter basename={import.meta.env.BASE_URL}>
       <Routes>
        <Route path='/' element={<Layout/>}>
           <Route path='/' element={<Dashboard/>}  />
           <Route path='/role'  element={<IndexRole/>}/>
           <Route path='/role/create'  element={<CreateRole/>}/>
           <Route path='/role/edit/:id'  element={<EditRole/>}/>

            <Route path='/count'  element={<Counter/>}/>
            <Route path='/customer'  element={<CustomerIndex/>}/>
            <Route path='/customer/create'  element={<CreateCustomer/>}/>
            <Route path='/customer/edit/:id'  element={<EditCustomer/>}/>
        </Route>
       </Routes>
      </BrowserRouter>



    </>
  )
}

export default App
