<?php 



 print_r($data);


?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

   <?php 
   
     foreach ($data as $key => $value) {
       echo "
       
         <tr>
          <th >1</th>
          <td>$value->name</td>
          <td>$value->unit_price</td>
          <td>$value->purchase_price</td>
          <td><img width='50' src='$base_url/img/products/$value->photo' alt='' srcset=''> </td>
       
         </tr>
       
       
       
       ";
     }
   
   ?>
  
  
  
  </tbody>
</table>