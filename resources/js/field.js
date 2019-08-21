Nova.booting((Vue, router) => {
    Vue.component('index-nova-video-url-field', require('./components/IndexField'));
    Vue.component('detail-nova-video-url-field', require('./components/DetailField'));
    Vue.component('form-nova-video-url-field', require('./components/FormField'));
})
