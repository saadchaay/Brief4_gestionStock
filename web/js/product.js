const ADD_FORM = document.getElementById('add-product-form');
const CLOSE_FORM_ICON = document.getElementById('close-form');
const input_name = document.getElementById('_name');
const input_sku = document.getElementById('_sku');
const input_desc = document.getElementById('_description');
const input_price = document.getElementById('_price');
const input_quantity = document.getElementById('_quantity');
const input_catg = document.getElementById('_category');
const heading = document.getElementById('heading');
const btn_update = document.getElementById('btn-submit');
const btn_reset = document.getElementById('reset-btn');
const form_delete = document.getElementById('confirm-form');
const btn_delete = document.getElementById('confirm-msg');

    function displayForm() {
        ADD_FORM.className = "add-product";
        input_name.setAttribute('value',"");
        input_sku.setAttribute('value',"");
        input_sku.removeAttribute('disabled');
        input_sku.setAttribute('style','background: none;');
        input_desc.textContent = "" ;
        input_price.setAttribute('value',"");
        input_quantity.setAttribute('value',"");
        input_catg.setAttribute('value',"");
        btn_update.textContent = "Submit";
        heading.textContent = "Please fill this form for add a product";
        btn_update.setAttribute('name','submit_product');
    }

    function displayFormEdit(name, description, price, quantity, sku_id, catg) {
        ADD_FORM.className = "add-product";
        input_name.setAttribute('value',name);
        // input_sku.setAttribute('disabled',true);
    //TODO: keep disabled SKU input ....
        input_sku.setAttribute('style','background: #f1f1f1;');
        input_sku.setAttribute('value',sku_id);
        input_desc.textContent = description ;
        input_price.setAttribute('value',price);
        input_quantity.setAttribute('value',quantity);
        // input_quantity.setAttribute('value',quantity);
        heading.textContent = "Please change this data form for update a product";
        btn_update.textContent = "Update";
        input_catg.textContent = catg;
        btn_update.setAttribute('name','update-product');
        btn_reset.setAttribute('onclick','resetAll()');
    }

    function displayDelete(sku_id){
        form_delete.className = "confirmation-msg" ;
        btn_delete.setAttribute('value',sku_id);
    }
    function disabledMsg(){
        form_delete.className = "disabled-form" ;
        // btn_delete.setAttribute('value',sku_id);
    }

    CLOSE_FORM_ICON.addEventListener('click' , () => {
        ADD_FORM.className = "disabled-form" ;
    });

    function validateForm() {
      let productName = input_name.value ;
      let productNameRgx = /^[a-zA-Z]$/ ; 
      var res = productNameRgx.test(productName);
      // alert("product name: ", res);
    }

    function resetAll() {
        input_name.setAttribute('value',"");
        input_desc.textContent = "" ;
        input_price.setAttribute('value',"");
        input_quantity.setAttribute('value',"");
        input_quantity.setAttribute('value',"");
    }
