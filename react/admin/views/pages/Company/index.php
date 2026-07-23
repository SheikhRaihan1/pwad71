<?php 
   // print_r($data);
?>

 <div>
     <a class="btn btn-primary" href="<?php echo $base_url?>/company/create">Create</a>
 </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">road</th>
      <th scope="col">phone</th>
      <th scope="col">District</th>
      <th scope="col">country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    
     foreach ($data as $key => $company){
        $key++;
       echo "
           <tr>
            <th scope='col'>$key</th>
            <th scope='col'>$company->name</th>
            <th scope='col'>$company->email</th>
            <th scope='col'>$company->road</th>
            <th scope='col'>$company->phone</th>
            <th scope='col'>$company->district_id</th>
            <th scope='col'>$company->country_id</th>
            <th scope='col' class='btn-group'>
              <a class='btn btn-secondary' href='$base_url/company/edit/$company->id'>Edit</a>
              <a class='btn btn-danger' href='$base_url/company/delete/$company->id'>Delete</a>
            </th>
          </tr>
       ";
     }

    ?>
  </tbody>
</table>

