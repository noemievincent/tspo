module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    './*.php',
    './inc/**/*.php',
    './templates/**/*.php',
    './safelist.txt'
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  safelist: [
    'text-center'
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  theme: {
    extend: {
      fontFamily: {
        lato: 'Lato, sans-serif'
      },
      colors: {
        blue: {
          DEFAULT: '#003E7A',
          light: '#D3D9DF',
          dark: '#00274D',
        },
        body: '#FFFEFD',
      }
    }
  },
  plugins: []
}