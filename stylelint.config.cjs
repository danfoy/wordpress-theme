// The StyleLint WebPack loader doesn't appear to support ES Modules yet
// Forcing CommonJS mode via .cjs extension

module.exports = {
    extends: "stylelint-config-standard-scss",
    ignoreFiles: ['!./src/**'],
    rules: {
        "rule-empty-line-before": null, // Preference, cleaner nesting
        "at-rule-empty-line-before": null, // Preference, cleaner nesting
        "declaration-empty-line-before": null, // Doesn't play nice with margin blocks
        "scss/double-slash-comment-empty-line-before": null, // Allow double-slash comments as headings
    },
};
