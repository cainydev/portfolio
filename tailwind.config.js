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
                'hideout': "url('/resources/patterns/hideout.svg')"
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