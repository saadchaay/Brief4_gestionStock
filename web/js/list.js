import { STYLE_BUTTONS_RE, in_out_Stock } from "./functions.js";
// VARIABLES::
    const stock_status = document.getElementsByClassName('stock-status');
    const event_cta = document.getElementsByClassName('bottom-side');
    const submit_reset = document.getElementsByClassName('btns');

    
//  CALL FUNCTIONS::
in_out_Stock(stock_status);
STYLE_BUTTONS_RE(event_cta);
STYLE_BUTTONS_RE(submit_reset);

