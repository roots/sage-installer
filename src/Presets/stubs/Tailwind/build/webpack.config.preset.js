'use strict'; // eslint-disable-line

const ExtractTextPlugin = require('extract-text-webpack-plugin');

const config = require('./config');

/** Default PostCSS plugins */
let postcssPlugins = [
  require('tailwindcss')(`${config.paths.assets}/styles/tailwind.config.js`),
  require('autoprefixer')(),
];

/** Add cssnano when optimizing */
config.enabled.optimize
  ? postcssPlugins.push(
      require('cssnano')({
        preset: ['default', { discardComments: { removeAll: true } }],
      }),
    )
  : false;

module.exports = {
  module: {
    rules: [
      {
        test: /\.scss$/,
        include: config.paths.assets,
        use: ExtractTextPlugin.extract({
          fallback: 'style',
          use: [
            { loader: 'cache' },
            { loader: 'css', options: { sourceMap: true } },
            {
              loader: 'postcss',
              options: {
                parser: config.enabled.optimize
                  ? 'postcss-safe-parser'
                  : undefined,
                plugins: postcssPlugins,
                sourceMap: true,
              },
            },
            {
              loader: 'resolve-url',
              options: { silent: true, sourceMap: true },
            },
            {
              loader: 'sass',
              options: { sourceComments: true, sourceMap: true },
            },
          ],
        }),
      },
    ],
  },
};
