# danfoy.com WordPress Theme

The upcoming redesign for [danfoy.com](https://danfoy.com).

Currently in the early stages of development, though functional. The `main` branch is the current iteration, the `next` branch is the current stable build of the next iteration.

## Philosophy

I am undertaking a from-scratch redesign for personal enjoyment and nostalgia. I write little PHP these days (nor frontend code, as it happens) and am eschewing WordPress's new Block Layout paradigm, though I am enthusiastically embracing the [Gutenberg](https://wordpress.org/gutenberg/) blocks.

In an ernest but probably futile attempt to keep technical debt to a minimum, I am structuring the source files in a *very* modular style, and then flattening them to WordPress's expected flat structure during the build process. I personally am a prolific user of [post formats](https://wordpress.org/documentation/article/post-formats/), so the structure of the project leans heavily into that (rather than custom posts or category-sniffing), with loops and other template parts split by post format and heavy use of includes to keep files small and focused.

It should feel like an eBook on an iPhone, a document or brochure on an iPad, and a portfolio on desktop. The site emphasises consistent vertical flow, a simple document-centric style with minimal clutter, images that make the best use of screen size and orientation, bespoke mobile-first responsive Sass components (no Bootstrap or imported grid systems or laggy JS manipulations), and attention to semantics and document outline at the markup level. It will be accessable but I don't intend to shy away from things like vertical text, horizontal scrolling, or columns.

I know, no-one cares about any of those things anymore, not even the few that ever did. That's not how we do websites anymore. I get it, and it's for the best. Why struggle with literally endless cascading issues and trying to roll out your own media query system from scratch when we have over a decade of experience which has whittled the remaining frameworks into mature, stable, documented components you can import with a single line? I don't bat an eyelid at a 700mb `node_modules` folder. But this theme is different. I'm making it just for me, and it doesn't have a deadline, or even a timeline really. If I view a photo post on my iPad, I want to feel like I'm holding a photo. If I rotate my iPad, or phone, or monitor, I expect the photo to expand to fill the available space.

That being said, it's early days yet. I'm still trying things out, so it might be a bit inconsistent, both visually and within the code. There are some hacky workarounds in PHP that will need neatly packaging and fitting into *the WordPress Way*.
