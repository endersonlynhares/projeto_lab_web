function editar(cod, orcamento){
 let input_cod = document.getElementById('cod');
 let input_orc = document.getElementById('orcamento_os');
 input_cod.value = cod;
 input_orc.value = orcamento;

 let myModal = new bootstrap.Modal(document.getElementById('form_editar'), focus);
 myModal.show();


}