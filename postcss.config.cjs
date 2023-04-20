const postcssPresetEnv = require('postcss-preset-env');

// The PostCSS WebPack loader doesn't appear to support ES Modules yet
// Forcing CommonJS mode via .cjs extension

module.exports = {
    plugins: [
        postcssPresetEnv,
  ],
};

