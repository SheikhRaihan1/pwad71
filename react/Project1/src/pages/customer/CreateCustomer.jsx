import axios from 'axios';
import React, { useState } from 'react'
import { useNavigate } from 'react-router-dom';

const CreateCustomer = () => {
     const baseUrl = import.meta.env.VITE_API_BASE_URL;
     const navagate = useNavigate();

     const [customer, setCustomer] = useState({
          name: "",
          email: "",
          mobile: "",
          address: "",
          photo: ""
     });

     //  photo preview 
     const [photoPreview, setPhotoPreview] = useState(null)

     function handleChange(e) {
          const { name, value, type, files } = e.target;
          
          
          if (type == "file") {
               setCustomer((prev) => ({
                    ...prev,
                    [name]: files[0]
               }))


          //  photo preview 
            const reader = new FileReader();
            reader.onload=()=>{
               setPhotoPreview(reader.result)
            }
            reader.readAsDataURL(files[0])



          } else {
               setCustomer((prev) => ({
                    ...prev,
                    [name]: value
               }))
          }



     }


     function handleSubmit(e) {
          e.preventDefault()
          console.log(customer);

          let cusFormData= new FormData();
          cusFormData.append("name", customer.name);
          cusFormData.append("email", customer.email);
          cusFormData.append("mobile", customer.mobile);
          cusFormData.append("address", customer.address);
          cusFormData.append("photo", customer.photo);


          axios({
               url: `${baseUrl}/customer/save`,
               method: "post",
               data: cusFormData
          })
          .then((res) => {
               console.log(res);
               navagate("/customer");
          })
          .catch(err => {
               console.log(err);
          })

     }

     return (
          <>

               <form onSubmit={handleSubmit}>
                    <div>
                         <label htmlFor="name">Name</label> <br />
                         <input onChange={handleChange} type="text" name='name' value={customer.name} />
                    </div>
                    <div>
                         <label htmlFor="mobile">Mobile</label> <br />
                         <input onChange={handleChange} type="text" name='mobile' value={customer.mobile} />
                    </div>
                    <div>
                         <label htmlFor="email">Email</label> <br />
                         <input onChange={handleChange} type="text" name='email' value={customer.email} />
                    </div>

                    <div>
                         <label htmlFor="photo">Photo</label> <br />
                         <input onChange={handleChange} type="file" name='photo' />
                        {/*  photo preview  */}
                         {photoPreview && (
                              <img  width={100} src={photoPreview} alt="" srcset="" />
                         )}
                    </div>


                    <div>
                         <label htmlFor="address">address</label> <br />
                         <textarea onChange={handleChange} type="text" value={customer.address} name='address'></textarea>
                    </div>

                    <div>

                         <input type="submit" />
                    </div>


               </form>
          </>
     )
}

export default CreateCustomer