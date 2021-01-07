import React, { Component } from 'react'
import axios from 'axios'
import config from '../../config'
import PropTypes from 'prop-types'
import classnames from 'classnames'

class Province extends Component {
    constructor (props) {
        super(props)

        this.state = {
            provinces: [],
            value: this.props.value,
        }
    }

    static getDerivedStateFromProps (props) {
        return { message: props.message }
    }

    async componentDidMount () {
        await this.fetchProvinces()
    }

    async fetchProvinces () {
        const response = await axios.get(`${config.api.baseUrl}/address/provinces`)
        this.setState({ provinces: response.data })
    }

    onChange = (event) => {
        if (this.props.onChange) {
            this.props.onChange(event)
        }

        this.setState({ value: event.target.value })
    }

    render () {
        return (
            <div className="form-group">
                <label>Tỉnh/Thành phố</label>
                <select
                    onChange={this.onChange}
                    value={this.state.value}
                    className={classnames({ 'form-control': true, 'is-invalid': !!this.state.message })}
                >
                    <option>-- Tỉnh/Thành phố --</option>
                    {
                        this.state.provinces && this.state.provinces.map((province) => (
                            <option
                                key={province.id}
                                value={province.id}
                            >
                                {province.name}
                            </option>
                        ))
                    }
                </select>

                {!!this.state.message && <div className="text-danger form-text">{this.state.message}</div>}
            </div>
        )
    }
}

Province.propTypes = {
    value: PropTypes.number,
    onChange: PropTypes.func,
    message: PropTypes.string
}

export default Province
