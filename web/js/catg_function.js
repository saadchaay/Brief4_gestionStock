const ADD_FORM_ctg = document.getElementById('add-category-form');
const CLOSE_FOR = document.getElementById('close-form');
const catgName = document.getElementById('catgName');
const catgDesc = document.getElementById('catgDesc');
const _update = document.getElementById('updateBtn');
const heading = document.getElementById('heading');
const _delete = document.getElementById('deleteBtn');
const form_delete = document.getElementById('confirm-form');
const btn_reset = document.getElementById('resetBtn');

    function displayForm_category() {
        ADD_FORM_ctg.className = "add-category";
        catgDesc.textContent = "" ;
        catgName.setAttribute('value', "");
        _update.textContent = "Submit";
        heading.textContent = "Please fill this form for add a category";
        _update.setAttribute('name','submit-category');
    }

    function dispUpdate_catg(id,name,desc) {
        ADD_FORM_ctg.className = "add-category";
        catgDesc.textContent = desc ;
        catgName.setAttribute('value', name);
        _update.textContent = "Update";
        heading.textContent = "Please fill this form for update a category";
        _update.setAttribute('name','update-category');
        _update.setAttribute('value',id);
        btn_reset.setAttribute('onclick','resetAll()');
    }

    function dispDelete(id_catg){
        form_delete.className = "confirmation-msg" ;
        _delete.setAttribute('value',id_catg);
    }

    CLOSE_FOR.addEventListener('click' , () => {
        ADD_FORM_ctg.className = "disabled-form" ;
    });

    function resetAll() {
        catgDesc.textContent = "" ;
        catgName.setAttribute('value', "");
    }