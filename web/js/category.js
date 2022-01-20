import { append_CHILD, STYLE_BUTTONS_RE } from "./functions.js";

const categories = document.getElementById('categories');
const category = document.getElementById('category-item');
const buttons = document.getElementsByClassName('btns');

// append_CHILD(category,categories,5);
STYLE_BUTTONS_RE(buttons);
