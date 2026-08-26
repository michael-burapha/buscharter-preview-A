# Bus Charter — Service by Location plugin

Solves the WordPress content-sanitizer issue (see main conversation): pasting raw
HTML directly into Elementor's "HTML" widget gets filtered by WordPress core --
`<style>` tags are stripped entirely, and even the `display` CSS property inside
inline `style=""` attributes is silently removed. This breaks any responsive
(flexbox/grid) layout and any hover effects.

Shortcodes bypass this entirely: `do_shortcode()` never runs a shortcode's PHP
return value through `wp_kses`, because shortcode output is developer-authored
PHP, not untrusted user content. So this plugin returns the *exact* full-fidelity
markup -- real `<style>` tag, real `@media` breakpoints, real `:hover` states --
completely untouched.

## Install

1. In WordPress admin: **Plugins → Add New → Upload Plugin**
2. Upload `bus-charter-service-by-location.zip`
3. Click **Activate**

## Use

In Elementor, drag in the **Shortcode** widget (not the HTML widget) and enter:

```
[bus_charter_service_by_location]
```

That's it -- no more copy-pasting HTML, and no dependency on the
`unfiltered_html` capability.

## Updating the content later

The HTML/CSS is generated from `gemma-design/site/index.html` in the sibling
project. If the design changes, regenerate this plugin file rather than
hand-editing it (ask Claude to re-run the generator).

## Note on images

The 3 logo images now point to the WordPress Media Library
(`https://buscharter.com.au/wp-content/uploads/2026/08/...`) instead of this
repo's GitHub Pages -- no external dependency for production.
