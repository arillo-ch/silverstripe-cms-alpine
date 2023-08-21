# arillo/silverstripe-cms-alpine

Loads alpinejs into CMS.

To instantiate you alpine components, you need to listen for the `alpine:init` event like this:

```
/* global Alpine */

const component = {
  init() {
    console.log('yourComponent.init');
  }
};

if (typeof Alpine !== 'undefined') {
  Alpine.data('yourComponent', component);
}
document.addEventListener('alpine:init', () => {
  Alpine.data('yourComponent', component);
});
```

Currently only `alpinejs@3.12.3_dist_cdn.min.js` is available, support for other versions might come in future.
