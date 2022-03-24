// require('./bootstrap');

import 'viewerjs/dist/viewer.css';
import Viewer from 'viewerjs';
let gallery;
if (document.getElementById('images')){
    gallery = new Viewer(document.getElementById('images'), {
        title: 0
    });
}