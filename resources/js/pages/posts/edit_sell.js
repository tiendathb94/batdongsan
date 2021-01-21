import Form from './Components/FormEdit'
import React from 'react'
import ReactDOM from 'react-dom'

(() => {
    function showProjectFormComponent () {
        const post = typeof window.post === 'object' ? window.post : undefined
        const container = document.getElementById('js-form-create-sell-posts')
        if (container) {
            ReactDOM.render(<Form post={post}/>, container)
        }
    }

    showProjectFormComponent()
})()