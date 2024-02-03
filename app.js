import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
import 'bootstrap';
import './scss/styles.scss'

import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from "./resources/js/Components/ExampleComponent.vue";
app.component('example-component', ExampleComponent);

app.mount('#app');