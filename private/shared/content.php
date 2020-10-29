<?php
    $database = [
        ['id'=>'1','first'=>"Kulvendra",'last'=>'Singh'],
        ['id'=>'2','first'=>"Bharat",'last'=>'Singh'],
        ['id'=>'3','first'=>"Madhu",'last'=>'Sulaniya'],
    ]

?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>

  <tbody>

    <?php foreach($database as $data) {?>
    <tr>
      <th scope="row"><?php echo $data['id'];?></th>
      <td><?php echo $data['first'];?></td>
      <td><?php echo $data['last'];?></td>
      <td><a href=" <?php echo url_for('../page2.php?id='.$data['id']) ?>">view</a></td>
    </tr>

    <?php } ?>
    
  </tbody>



  </table>
