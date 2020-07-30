/* Add here all your JS customizations */
var base_url = '<?php echo base_url() ?>';

function card() {
    div_card = document.getElementById('card');
    div_list = document.getElementById('list');
    div_card.style.display = '';
    div_list.style.display = 'none';
}

function list() {
    div_card = document.getElementById('card');
    div_list = document.getElementById('list');
    div_card.style.display = 'none';
    div_list.style.display = '';
}