Nova.booting((Vue, router, store) => {
  Vue.component('index-thaana-textarea-field', require('./components/IndexTextareaField'));
  Vue.component('detail-thaana-textarea-field', require('./components/DetailTextareaField'));
  Vue.component('form-thaana-textarea-field', require('./components/FormTextareaField'));
  Vue.component('index-thaana-text-field', require('./components/IndexTextField'));
  Vue.component('detail-thaana-text-field', require('./components/DetailTextField'));
  Vue.component('form-thaana-text-field', require('./components/FormTextField'));
});
