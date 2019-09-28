# Common WP

![](./assets/images/github.jpg)

This is a wordpress theme for non-profit use. It's focus is on simple visual design, and clean componentized code for easy customization by organizations with diverse needs.

## Requirements

In order to use this theme fully you need to install the [[Common WP Blocks]](https://github.com/jcklpe/common-wp-blocks) plugin and the [[The Events Calendar]](https://wordpress.org/plugins/the-events-calendar/). Also if you want to make any changes you will need to rebuild the files using the gulp build process which requires you to to know how to use npm and gulp.

## Build Process

This theme comes with a [gulp](https://gulpjs.com/) based build system. It's super easy to use! You just need some basic knowledge of [CLI](https://www.youtube.com/watch?v=4RPtJ9UyHS0).

To build the theme you just need to install the package manager [npm](https://www.npmjs.com/) and run `npm install` in the theme root folder then run `gulp build` to build a new version of the `build` files.

You can also use the command `gulp watch` to watch thesrc` folder for any changes to the files as you work so that it can seamlessly build new versions of the build files in the background.

## TODO:

- [x] componentize out scss parts and reorganize build process
- [x] replace all hardcoded logos with global custom fields
- [x] replace all hardcoded text with global custom fields
- [x] convert all custom template blocks into template partials
- [x] white label all organizational references
- [x] break out block components into a separate companion plugin
- [ ] convert all template partials into Gutenberg Blocks to be used in posts
- [ ] build more Blocks to cover additional page designs
- [ ] Lots of other stuff

## License

This theme uses modified version of GPL 3 which restricts use and distribution of this software to non-profit non-capitalist uses.
