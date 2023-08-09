# arillo/silverstripe-cms-alpine

Loads alpinejs into CMS.

To instantiate you alpine components, you need to listen for the `alpine:init` event like this:

```
document.addEventListener('alpine:init', () => {
  Alpine.data('yourComponentName', {
    init() {
      console.log('yourComponentName.init');
    }
  });
});
```

Currently only `alpinejs@3.12.3_dist_cdn.min.js` is available, support for other versions might come in future.
