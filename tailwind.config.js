module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    container: {
      center: true,
      padding: '0',
      margin: '0',
    },
    height: {
        sm: '8px',
        md: '16px',
        lg: '60vh',
        xl: '80vh',
    },  
    minHeight: {
         '0': '0',
         '1/4': '25%',
         '1/2': '50%',
         '3/4': '75%',
         'full': '100%',
      },
      maxHeight: {
         '0': '0',
         '1/4': '25%',
         '1/2': '50%',
         '2/3': '60%',
         '3/4': '75%',
         'full': '100%',
       },
       gridTemplateRows: {
        // Simple 8 row grid
        '8': 'repeat(8, minmax(0, 1fr))',
        '12': 'repeat(12, minmax(0, 1fr))',
        // Complex site-specific row configuration
       'layout': '200px minmax(900px, 1fr) 100px',
       'layout': '200px minmax(900px, 1fr) 100px',
      },
    extend: {},
  },
  variants: {
    tableLayout: ['responsive'],
    tableLayout: ['responsive', 'hover', 'focus'],
  },
  plugins: [],
}
