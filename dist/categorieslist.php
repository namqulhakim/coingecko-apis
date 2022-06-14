<h3 class="mb-0"><a data-toggle="collapse" data-target="#collapseExample" aria-expanded="collapseExample">Category List</a></h3>
<p>&nbsp;</p>
<div class="collapse" id="collapseExample">
                            <div class="card card-body">
<?php 

$url = 'https://api.coingecko.com/api/v3/coins/categories/list';
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$curlresult = curl_exec($curl);

$data = json_decode($curlresult);
  ?>
  <table class="table table-dark">
    <tbody>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Category ID</th>
          <th scope="col">Name</th>
      </tr>
  <?php 
  $i = 0;
  foreach ($data as $data){
    $i= $i+1;
  ?>
  <tr>
      <td> <?= $i; ?></td>
      <td> <?= $data->category_id; ?> </td>
      <td> <?= $data->name; ?> </td>
  </tr>
  <?php }
  ?>
    </tbody>
  </table>
  <?php
curl_close($curl);
  
?>
                            </div>
                            </div>