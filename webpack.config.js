var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  entry: ['./src/app.js', './src/main.scss'],
  output: {
    filename: 'public/js/script.js'
  },
  module: {
    rules: [
      { // css / sass / scss loader for webpack
        test: /\.(css|sass|scss)$/,
        use: ExtractTextPlugin.extract({
          use: ['css-loader', 'sass-loader'],
        })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: 'public/css/style.css',
      allChunks: true,
    }),
  ],
};
