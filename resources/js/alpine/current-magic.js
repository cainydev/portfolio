export default (() => {
    document.addEventListener('alpine:init', () => {
        let state = Alpine.reactive({path: window.location.pathname})

        document.addEventListener('livewire:navigated', () => {
            queueMicrotask(() => {
                state.path = window.location.pathname
            })
        })

        Alpine.magic('current', (el) => (expected = '') => {
            const parser = document.createElement('a')
            parser.href = expected

            return state.path === parser.pathname
        })
    })
    return undefined;
})()
