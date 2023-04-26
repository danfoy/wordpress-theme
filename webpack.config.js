import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import BrowserSyncPlugin from 'browser-sync-webpack-plugin';
import CopyPlugin from 'copy-webpack-plugin';
import StylelintPlugin from 'stylelint-webpack-plugin';
import path from 'path';

export default {
    entry: {
        main: './src/main.js',
    },
    output: {
        path: path.resolve('./dist'),
        filename: 'scripts.bundle.js',
    },
    devtool: 'source-map',
    plugins: [
        new StylelintPlugin({

        }),
        new MiniCssExtractPlugin({ // Extract CSS to specific file rather than bundle
            filename: 'style.css',
        }),
        new CopyPlugin({
            patterns: [
                { // Copy PHP files across to dist
                    from: './src/**/*.php',
                    to: '[name][ext]' // Flat structure
                },
                { // Copy images to dist
                    from: './src/images/**/*',
                    to: 'images/[name][ext]' // Flat structure
                },
            ],
        }),
        new BrowserSyncPlugin({ // BrowserSync settings
            proxy: 'http://localhost:8000', // The server started by Docker
            files: ['./dist/style.css', '**/*.php'], // Reload on both CSS and PHP changes
            injectCss: true, // Inject (vs. full reload) on css changes
            ghostMode: false, // Stop mirroring scroll, click etc. across browsers
            notify: false, // Prevent annoying popup on first load
            open: false, // Prevent opening browser (causes focus grab)
        }, { // BrowserSync plugin settings
            reload: false, // Let WebPack handle reloading
        }),
    ],
    module: {
        rules: [
            {
                test: /\.s?[c]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                    'sass-loader',
                ],
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            ['@babel/preset-env', { targets: '> 0.25%, not dead' }],
                        ],
                    },
                },
            },
        ],
    },
};
