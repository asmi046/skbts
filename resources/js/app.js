import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';
import ModalWindow from "./components/ModalWindow.vue"
import { VMaskDirective } from 'v-slim-mask'
import SideMenu from './menues.js';


import axios from 'axios'
import VueAxios from 'vue-axios'

const global_app = createApp({
    components:{
        ModalWindow,
    },
    setup() {}
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");

new SideMenu('#main_side_menue', '.show_menue_button');

const anchors = document.querySelectorAll('a[href*="#"].yakor')
// const anchors = document.querySelectorAll('nav a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    main_side_menue.classList.remove('active');
    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
