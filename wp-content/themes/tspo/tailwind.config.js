module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    './*.php',
    './inc/**/*.php',
    './templates/**/*.php',
    './safelist.txt',
    './**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  safelist: [
    'text-center'
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  theme: {
    screens: {
      sm: "460px",
      md: "768px",
      rg: "976px",
      lg: "1440px",
      xl: "1920px",
      "2xl": "2300px",
    },
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
      },
      animation: {
        'bounce-banner': 'bounce-banner 2s infinite',
      },
      keyframes: {
        'bounce-banner': {
          '0%, 20%, 50%, 80%, 100%': { transform: 'translateY(0)' },
          '40%, 60%': { transform: 'translateY(-10px)' },
        }
      }
    }
  },
  plugins: []
}