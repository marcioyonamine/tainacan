/**
 * Scripts do modulo de debates do tainacan
 * 
 *  #1 Funcoes a serem executadas no inicio do modulo
 *  #2 Abre o modal de criacao de argumento e de pergunta
 *  #3 Abrir os campos para depositar os argumentos
 * 
 */
//############## #1 Funcoes a serem executadas no inicio do modulo ############# 
$(window).load(function () {
});
function showItemObject(object_id, src) {
    $.ajax({
        url: src + '/controllers/object/object_controller.php',
        type: 'POST',
        data: {operation: 'list_single_object', object_id: object_id, collection_id: $("#collection_id").val()}
    }).done(function (result) {
        $('#configuration').html(result).show();
    });
}
function hide_all_modals(){
    $('.modal').modal('hide');
}
//############################################################################## 

//############## #2 Abre o modal de criacao de argumento e de pergunta############# 
function contest_show_modal_create_argument(){
    $('#modalCreateArgument').modal('show');
}
function contest_show_modal_create_question(){
    $('#modalCreateQuestion').modal('show');
}
//############## #3 Abrir os campos para depositar os argumentos #############
function open_positive_argument(id){
    $('#positive-argument-'+id).fadeIn();
    $('#negative-argument-'+id).fadeOut();
}

function open_negative_argument(id){
    $('#positive-argument-'+id).fadeOut();
    $('#negative-argument-'+id).fadeIn();
}
