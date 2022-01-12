
// VARIABLES::
    const stock_status = document.getElementsByClassName('stock-status');
    const event_cta = document.getElementsByClassName('bottom-side');
    const container = document.getElementById('container');
    const item = document.getElementById('item');

//cta_stock status FUNCTION::
function in_out_Stock(para) 
    {

        for (let index = 0; index < para.length; index++) 
        {
            switch (para[index].textContent) {
                case 'In stock':
                    para[index].setAttribute('style','background-color: #07BE6E;')
                    break;
                case 'Out stock':
                    para[index].setAttribute('style','background-color: #f9423c;')
                    break;
                default:
                    para[index].setAttribute('style','background-color: #07BE6E;')
                    break;
            }
        }
    }


// Remove, Edit buttons color FUNCTION::
function REMOVE_EDIT_btn(param) {
    for (let index = 0; index < param.length; index++) {
        param[index].childNodes[1].setAttribute('style','background-color: #FF6600;');
        param[index].childNodes[3].setAttribute('style','background-color: #1D2A38;');
    }
    }

//  CALL FUNCTIONS::
in_out_Stock(stock_status);
REMOVE_EDIT_btn(event_cta);


//  CLONE ITEMS IN HTML:: 
for (let index = 0; index < 9; index++) {
    let cp_item = item.cloneNode(true);
    container.appendChild(cp_item);
}
