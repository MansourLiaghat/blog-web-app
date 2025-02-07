import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import "./functions.js";
import "./front/swiperSliderTrigger.js";
import "./front/darkTheme.js"
import.meta.glob(['../images/**']);

