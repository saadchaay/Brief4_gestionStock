// VARIABLES::
    const _status = document.getElementById('status-stock');
    const _btns = document.querySelectorAll('button[type="submit"]');

//cta_stock status FUNCTION::
    function in_out_Stock(para) 
    {
        switch (para.textContent) {
            case 'In stock':
                para.setAttribute('style','background-color: #07BE6E;')
                break;
            case 'Out stock':
                para.setAttribute('style','background-color: #f9423c;')
                break;
            default:
                para.setAttribute('style','background-color: #07BE6E;')
                break;
        }
    }

// Remove, Edit buttons color FUNCTION::
    function STYLE_BUTTONS_RE(param) {
        param[0].setAttribute('style','background-color: #FF6600;');
        param[1].setAttribute('style','background-color: #1D2A38;');
    }

//  CALL FUNCTIONS::
in_out_Stock(_status);
STYLE_BUTTONS_RE(_btns);