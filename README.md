# Letterform
Ultra minimalistic theme for Wordpress

## Development
Before you get started, make sure you have [Node.js](https://nodejs.org/), [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md) and [Bower](http://bower.io/#install-bower).

Do a first time setup by doing a `gulp install`.

Run `gulp watch` in the directory to automatically compile Javascript and stylesheets.

### Javascript
All Javascript files inside the `js/` directory get compiled and minifed to `scripts.min.js`. jQuery is already enqueued and available.

If you need another library that [Wordpress provides](https://codex.wordpress.org/Function_Reference/wp_enqueue_script#Default_Scripts_Included_and_Registered_by_WordPress), add it as a dependency to `letterform-scripts` in `functions.php`.

If it's not packaged with Wordpress, install it using bower `bower install` so it is included in the compiled `scripts.min.js`.

Finally, update `js/all.js` to include any initialization you may need.

### Stylesheets
The main SASS stylesheet `sass/style.scss` is compiled and minifed to `/style.css`.

Please do not add style rules inside the main `sass/style.scss`, instead edit the appropriate SCSS file (e.g. font related styles `_typography.scss`) or create a [partial](http://sass-lang.com/guide#topic-4) and [import](http://sass-lang.com/guide#topic-5] it into `sass/style.scss`.

- Browser prefixes are automatically added.
- [Source Maps](http://www.html5rocks.com/en/tutorials/developertools/sourcemaps/) are available if you need it.

#### The Grid
The grid system is based on [Pure](http://purecss.io/grids) with 24 columns. Instead of `.pure-u-` prefixes, we use a shorter `.g-` prefix.