if (process.argv.indexOf('--watch') > -1) {
  console.log('\x1Bc');
}

const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const WebpackNotifier = require('webpack-notifier');
const { exec } = require('child_process');
const chalk = require('chalk');

module.exports = (env = {}) => {
  let config = {
    entry: [
      './src/scss/styles.scss',
    ],
    output: {
      path: path.resolve(__dirname, 'dist/js'),
      filename: env.APP_ENV === 'production' ? 'bundle.min.js' : 'bundle.js'
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: [
                'env'
              ]
            }
          }
        },
        {
          test: /\.(sass|scss)$/,
          exclude: /node_modules/,
          use: ExtractTextPlugin.extract({
            use: [
              {
                loader: 'css-loader',
                options: {
                  url: false,
                  minimize: env.APP_ENV === 'production' ? true : false
                }
              },
              {
                loader: 'sass-loader'
              }
            ]
          })
        },
        {
          test: /\.css$/,
          exclude: /node_modules/,
          use: ['style-loader', 'css-loader']
        }
      ]
    },
    plugins: [
      new ExtractTextPlugin({
        filename: env.APP_ENV === 'production' ? '../css/styles.min.css' : '../css/styles.css'
      })
    ]
  }

  if (env.NOTIFY === 'true') {
    config.plugins.push(
      new WebpackNotifier({
        alwaysNotify: JSON.parse(env.NOTIFY_NOISY) ? true : false
      })
    )
  }

  return config;
}

process.on('SIGINT', () => {
  console.log(`
  
  ${chalk.green(`Killing Node Process with PID: ${process.pid}`)}`)

  exec(`killall node`);
});