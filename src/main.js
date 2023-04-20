/*

Scripts for danfoy.com

Scripts are loaded here, then bundled using WebPack. I considered splitting the
scripts into feature-based modules and importing only the scripts needed for
each page, but honestly after minification the script overhead is pretty low
anyway, and I think having one minified, cacheable script will probably be
better for performance than a bunch of extra HTTP requests.

*/

// A message for visitors browsing through the source via developer tools
console.log('Having a nosey? Feel free.');

/*
Importing the main Sass index here (rather than using the Sass CLI) allows
WebPack to handle building the assets and refreshing Browser-Sync during
development. The resulting CSS file is then stripped out by WebPack.
*/
import css from './main.scss';
