/** @type {import('tailwindcss').Config} */
module.exports = {
 content: ["./views/**/*.{html,php}"],
 theme: {
  extend: {
   fontFamily: {
    sans: "Urbanist, sans-serif",
   },
   width: {
    available: "-webkit-fill-available",
    "moz-available": "-moz-available",
   },
   height: {
    available: "-webkit-fill-available",
    "moz-available": "-moz-available",
   },
   colors: {
    vermelho: {
     100: "#fbe9ea",
     200: "#edb7b9",
     300: "#e08588",
     400: "#d35357",
     500: "#C62126",
     600: "#9a191f",
     700: "#6e1216",
     800: "#420b0d",
     900: "#160404",
    },
    verde: {
     50: "#edf8f2",
     100: "#e9fcf5",
     200: "#b4dbcd",
     300: "#7ebaa4",
     400: "#48997b",
     500: "#127852",
     600: "#0f6142",
     700: "#0b4831",
     800: "#072f20",
     900: "#03160f",
    },
   },
  },
 },
};
