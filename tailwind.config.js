module.exports = {
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
    },
    fontFamily: {
      display: ['"Noto Sans TC"', "sans-serif"],
      body: ['"Noto Sans TC"', "sans-serif"],
      serif: ['"Noto Serif TC"', "Georgia"],
    },
    extend: {},
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
