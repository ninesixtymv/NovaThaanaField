Nova.booting((Vue, router, store) => {
  Vue.component('index-dhivehi-textarea-field', require('./components/IndexTextareaField'));
  Vue.component('detail-dhivehi-textarea-field', require('./components/DetailTextareaField'));
  Vue.component('form-dhivehi-textarea-field', require('./components/FormTextareaField'));
  Vue.component('index-dhivehi-text-field', require('./components/IndexTextField'));
  Vue.component('detail-dhivehi-text-field', require('./components/DetailTextField'));
  Vue.component('form-dhivehi-text-field', require('./components/FormTextField'));
});
