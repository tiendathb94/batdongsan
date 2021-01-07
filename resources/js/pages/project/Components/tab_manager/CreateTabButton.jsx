import React, { Component } from 'react'
import classnames from 'classnames'
import PropTypes from 'prop-types'
import Helper from './Helper'

class CreateTabButton extends Component {
    constructor (props) {
        super(props)
        this.state = {
            showTabTypes: false,
            tabContents: []
        }
    }

    static getDerivedStateFromProps (props) {
        var tabContents = [];
        if(props.tabContents) {
            props.tabContents.map((tab) => {
                tabContents.push(tab.layout);
            })
        }
        return { tabContents: tabContents }
    }

    getTabContentTypes () {
        var tab = []
        Helper.getTabTypes().map((type) => {
            if(this.state.tabContents.indexOf(type.layout) == -1 || type.layout == 'custom') {
                tab.push(type)
            }
        })
        return tab;
    }

    onClickAddMoreTab = () => {
        this.setState({ showTabTypes: !this.state.showTabTypes })
    }

    onClickTabContentType (tabContentType) {
        this.setState({ showTabTypes: false, tabContents: [ ...this.state.tabContents, tabContentType.layout] })

        if (this.props.onAddContent) {
            this.props.onAddContent(tabContentType)
        }
    }

    render () {
        return (
            <div className="create-tab-button-wrapper">
                <button className="btn btn-light" onClick={this.onClickAddMoreTab}>
                    <span className={classnames({
                        'ti-minus': this.state.showTabTypes,
                        'ti-plus': !this.state.showTabTypes
                    })}></span> Thêm nội dung nâng cao
                </button>
                {
                    this.state.showTabTypes && <ul className="tab-content-types-wrapper">
                        {
                            this.getTabContentTypes().map((type) => (
                                <li key={type.layout} onClick={() => this.onClickTabContentType(type)}>
                                    <span className="ti-layers-alt"></span> {type.name}
                                </li>
                            ))
                        }
                    </ul>
                }
            </div>
        )
    }
}

CreateTabButton.propTypes = {
    onAddContent: PropTypes.func,
}

export default CreateTabButton
