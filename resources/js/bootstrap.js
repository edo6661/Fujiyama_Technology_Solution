import axios from 'axios';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

window.Quill = Quill;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

