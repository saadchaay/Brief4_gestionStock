import { append_CHILD, STYLE_BUTTONS_RE, in_out_Stock } from "./functions.js";
// VARIABLES::
    const stock_status = document.getElementsByClassName('stock-status');
    const event_cta = document.getElementsByClassName('bottom-side');
    const container = document.getElementById('container');
    const item = document.getElementById('item');
    const submit_reset = document.getElementsByClassName('btns');

//  CALL FUNCTIONS::
in_out_Stock(stock_status);
STYLE_BUTTONS_RE(event_cta);
STYLE_BUTTONS_RE(submit_reset);
append_CHILD(item,container,9);
