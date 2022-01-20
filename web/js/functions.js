
// style remove and edit buttons color 
function STYLE_BUTTONS_RE(param) {
    for (let index = 0; index < param.length; index++) {
        param[index].childNodes[1].setAttribute('style','background-color: #FF6600;');
        param[index].childNodes[3].setAttribute('style','background-color: #1D2A38;');
    }
}

// append childs on the content of section
function append_CHILD(CHILD,CONTAINER,count) {
    for (let index = 0; index < count; index++) {
        let cp_item = CHILD.cloneNode(true);
        CONTAINER.appendChild(cp_item);
    }
}

//cta_stock status FUNCTION::
function in_out_Stock(para) {
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


export {append_CHILD, STYLE_BUTTONS_RE, in_out_Stock} ;