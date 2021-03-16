require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { BCard, BCardBody, BCardFooter, BCardHeader, BCardImg, BTable } from 'bootstrap-vue'

const el = document.getElementById('app');

createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
        }),
})
    .mixin({ methods: { route } })
    .use(InertiaPlugin)
    .mount(el);
    Vue.component('BCard', BCard)
    Vue.component('BCardBody', BCardBody)
    Vue.component('BCardFooter', BCardFooter)
    Vue.component('BCardHeader', BCardHeader)
    Vue.component('BCardImg', BCardImg)
    Vue.component('BTable', BTable)

InertiaProgress.init({ color: '#4B5563' });
