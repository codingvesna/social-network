module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'body' : ['Montserrat', 'sans-serif']
        },
        colors: {
            'midnight-green' : '#114b5f',
            'metallic-seaweed' : '#028090',
            'neutral' : '#f0f0f0',
            'queen-blue' :'#456990',
            'fiery-red' : '#f45b69'
        },
        borderWidth: {
            '1' : '1px'
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
