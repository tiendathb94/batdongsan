import React, { Component } from 'react'
import PropTypes from 'prop-types'

class TabForm extends Component {
    constructor (props) {
        super(props)

        this.state = {}
    }

    static getDerivedStateFromProps (props) {
        return { name: props.tabContent.name, values: props.tabContent.values || {} }
    }

    onChangeTabContentName = (event) => {
        this.setState({ name: event.target.value })

        if (this.props.onChangeTabName) {
            this.props.onChangeTabName(event.target.value)
        }
    }

    onFormChange = (formValues) => {
        if (this.props.onChangeTabValues) {
            this.props.onChangeTabValues(formValues)
        }
    }

    render () {
        const LayoutComponent = this.props.tabContent.component

        return (
            <div className="tab-content-form-wrapper">
                <div className="form-group">
                    <label>Tiêu đề nội dung</label>
                    <input
                        className="form-control"
                        placeholder="Nhập tiêu đề cho loại nội dung này"
                        value={this.state.name}
                        onChange={this.onChangeTabContentName}
                        maxLength={50}
                    />
                </div>

                {LayoutComponent && <LayoutComponent project={this.props.project} onFormChange={this.onFormChange} values={this.state.values}/>}
            </div>
        )
    }
}

TabForm.propTypes = {
    tabContent: PropTypes.object,
    onChangeTabName: PropTypes.func,
    onChangeTabValues: PropTypes.func
}

export default TabForm
