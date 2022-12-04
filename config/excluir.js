function excluir(cod){
 let dados = {
  codigo: cod
}

 $.ajax({
  type: 'POST',
  url: "config/excluir_registros.php",
  data: dados,
  success: function (result, status) {
      alert("Exclusão feita com sucesso")
      $(`#gif${cod}`).hide()
      location.reload(true)
  },
  beforeSend: function(){
      $(`#gif${cod}`).show()
  },
  dataType: "json"
  });
}