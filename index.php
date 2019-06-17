<?php
$db= new PDO("pgsql:host=localhost;dbname=angelo","postgres","");
$query=$db->query("select *from curso");
?>
<table>
  <tr>
    <td>codc</td>
    <td>nome</td>
  </tr>
<?php
foreach($query as $curso){
  ?>
  <tr>
    <td><?php echo $curso['codc'];?></td>

     <form  action="altera.php" method="post">
       <td>

      <input type="text" name="nome" value="<?php  echo $curso['nome']?>" >
      <input type="hidden" name="codc" value="<?php  echo $curso['codc']?>">
      <button type="button" onclick="excluir(<?php echo $curso['codc']?>)">excluir</button>
    </td>
  </form>
  </tr>
<?php
}
?>
</table>
<a href="cadastrar.php">novo</a>
<script type="text/javascript">
function excluir(id){
  const data = new FormData();
  data.append('id', id);

  fetch('excluirAction.php', {
    method: 'POST',
    body: data
  })
    .then(function(resposta){
      document.location.reload()
    })
    .catch(function(error){
      console.log(error)
    })
}

</script>
