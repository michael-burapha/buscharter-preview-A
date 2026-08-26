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

The 3 logo images inside this shortcode's output currently point to
`https://michael-burapha.github.io/buscharter-preview-A/assets/...` (this repo's
GitHub Pages) as a temporary source. For production, upload
`logo-buscharter-au.png`, `logo-bushire-nz.png`, and `logo-busbank.png` to the
WordPress Media Library and swap the URLs in the plugin file's `<img src="...">`
tags.
