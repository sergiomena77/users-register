<div class="table-responsive animate__animated animate__backInRight">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> <i class="bi bi-list-ol"> ID </i>  </th>
      <th scope="col"> <i class="bi bi-file-person-fill">  NAME </i> </th>
      <th scope="col"> <i class="bi bi-envelope-check-fill">  EMAIL </i> </th>
      <th scope="col"> <i class="bi bi-braces-asterisk"> PASSWORD</i> </th>
      <th scope="col"> <i class="bi bi-123"> ESTADO </i> </th>
      <th scople="col"> <i class="bi bi-bookmark-check-fill"> HA SIDO CREADO </i> </th>
      <th scople="col"> <i class="bi bi-wrench-adjustable"> HA SIDO MODIFICADO </i>   </th> 
      

    </tr>
  </thead>
  <tbody>
  <?php 
 //var_dump($filas);
 for($i=0;$i<count($filas);$i++){
    $id =  $filas[$i]['user_id'];
   $nombre =  $filas[$i]['user_name'];
   $email =  $filas[$i]['user_email'];
   $password = $filas[$i]['user_password_usuarios'];
   $estado = $filas[$i]['user_state'];
    $crear = $filas[$i]['user_time_created'];
    $modificar = $filas[$i]['usuario_time_update'];
    ?>
    <tr>
<td> <?php echo $id ?> </td>
<td> <?php echo $nombre ?> </td>
<td> <?php echo $email ?> </td>
<td> <?php echo $password ?> </td>
<td> <?php echo $estado ?> </td>
<td> <?php echo $crear ?> </td>
<td> <?php echo $modificar ?> </td>
 </tr>
    <?php


 }
    
    ?>
  </tbody>
</table>
</div> 

