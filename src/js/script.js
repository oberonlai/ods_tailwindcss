// import UIkit from 'uikit';
// import Icons from 'uikit/dist/js/uikit-icons';
// UIkit.use(Icons);

import { Variable } from "./helpers/Variable"; 
const vars = new Variable();

document.addEventListener('DOMContentLoaded',()=>{
  vars.logo.classList.add('logo-class');
})