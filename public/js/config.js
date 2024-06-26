tailwind.config = {
    content: ['./*.php'],
    theme: {
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },
      extend: {
        colors: {
          brightRed: '#78c081',
          brightRedLight: '#316738',
          brightRedSupLight: '#ddffe0',
          darkBlue: 'hsl(228, 39%, 23%)',
          darkGrayishBlue: '#316738',
          veryDarkBlue: 'hsl(233, 12%, 13%)',
          veryPaleRed: 'hsl(13, 100%, 96%)',
          veryLightGray: 'hsl(0, 0%, 98%)',
        },
      },
    },
    plugins: [],
  }