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
      rl: "1230px",
      lg: "1440px",
      xl: "1920px",
      "2xl": "2560px",
    },
    extend: {
      fontFamily: {
        lato: 'Lato, sans-serif'
      },
      colors: {
        blue: {
          DEFAULT: '#203483',
          light: '#DEE2E7',
          dark: '#00274D',
          darker: '#071E34',
        },
        orange: {
          DEFAULT: '#F18515',
          light: '#FFFEFD',
        },
        error: {
          DEFAULT: '#B70F0F',
          light: '#FFEBEB'
        },
        success: {
          DEFAULT: '#97BF06',
          dark: '#78951D',
        },
      },
      animation: {
        'bounce-banner': 'bounce-banner 2s infinite',
      },
      keyframes: {
        'bounce-banner': {
          '0%, 20%, 50%, 80%, 100%': { transform: 'translateY(0)' },
          '40%, 60%': { transform: 'translateY(-10px)' },
        }
      },
      backgroundImage: {
        arrow: 'url("/assets/img/arrow.svg")',
      },
      content: {
        'check': "url('/assets/img/check.svg')",
      },
    }
  },
  plugins: []
}