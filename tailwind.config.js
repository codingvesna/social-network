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

            'neutral' : '#F7F7F2',
            'queen-blue' :'#456990',
            'fiery-red' : '#f45b69',
            'main' : '#3b3b3b',
            'p' : '#3e4e50',
            'border' :'#F2F3E2'
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
