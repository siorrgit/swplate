module.exports = {
  context: `${__dirname}/../src/js`,
  entry: {
    global: './global/index.js',
    front: './pages/front.js',
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader"],
      },
    ],
  },
  output: {
    path: `${__dirname}/../public/wp-content/themes/2023/assets/js`,
    clean: true
  }
};
