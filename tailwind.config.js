/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.svg",
    ],
    theme: {
        extend: {
            fontFamily: {
                'mono': ['RobotoMono', 'ui-monospace', 'monospace'],
            },
            colors: {
                'blue': '#264653',
                'turqoise': '#2a9d8f',
                'yellow': '#e9c46a',
                'primary': '#2b3e7c',
                'red': '#e76f51'
            },
            boxShadow: {
                'primary': '6px 6px 0px 0px #f4a261'
            },
            backgroundImage: {
                'circuit': "url('/resources/patterns/circuit-board.svg')",
                'zigzag': "url('/resources/patterns/zig-zag.svg')",
                'hideout': "url('/resources/patterns/hideout.svg')",
                'grid': "url(\"data:image/svg+xml,<svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='20' height='20' patternTransform='scale(2) rotate(45)'><rect x='0' y='0' width='100%' height='100%' fill='hsla(0, 0%, 100%, 0)'/><path d='M 10,-2.55e-7 V 20 Z M -1.1677362e-8,10 H 20 Z'  stroke-width='1.5' stroke='hsla(0, 0%, 0%, 1)' fill='none'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(%23a)'/></svg>\")"
            }
        },
    },
    safelist: [{
        pattern: /bg-(white|primary)/,
        variants: ['after'],
    }],
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
