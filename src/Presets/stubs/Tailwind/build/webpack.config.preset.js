'use strict'; // eslint-disable-line

const ExtractTextPlugin = require('extract-text-webpack-plugin');

const config = require('./config');

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
            { loader: 'css' },
            {
              loader: 'postcss',
              options: { config: { path: __dirname, ctx: config } },
            },
            {
              loader: 'sass',
              options: { sourceComments: true },
            },
          ],
        }),
      },
    ],
  },
};
