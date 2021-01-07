import FormSearchHome from './Components/FormSearchHome'
import React from 'react'
import ReactDOM from 'react-dom'

(() => {
    function showFormSearchComponentHome () {
        const container = document.getElementById('js-form-search-home')
        if (container) {
            ReactDOM.render(<FormSearchHome />, container)
        }
    }

    showFormSearchComponentHome()
})()