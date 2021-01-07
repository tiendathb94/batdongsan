import React, { Component } from 'react'
import AddressForm from "../../../containers/address_form"
import axios from 'axios'
import { convertToRaw, EditorState } from 'draft-js'
import classnames from "classnames"
import config from "../../../config"
import { timers } from 'jquery'

class EditForm extends Component {
    constructor (props) {
        super(props)

        this.state = {
            formValues: {
                ...this.initFormValuesForEditExistUser(props.user),
            },
            errors: [],
            errorByFields: {},
            loading: false,
            message: {},
            avatar: {},
            previewImg: ''
        }

        this.addressField = React.createRef()
    }

    initFormValuesForEditExistUser (user) {
        if (!user) {
            return {}
        }

        return {
            avatar: user.avatar ?? '',
            fullname: user.fullname ?? '',
            date_of_birth: user.date_of_birth_format,
            gender: user.gender ?? 1,
            phone: user.phone ?? '',
            tax: user.tax ?? '',
            facebook: user.facebook ?? '',
            zalo: user.zalo ?? '',
            skype: user.skype ?? '',
            viber: user.viber ?? '',
            address: user.address || {},
            url_avatar: user.avatar ? user.url_avatar : '/images/default-user-avatar-blue.jpg'
        }
    }

    onSyncAddress = (address) => {
        this.setState({
            formValues: {
                ...this.state.formValues,
                address: {
                    province_id: address.provinceId,
                    district_id: address.districtId,
                    ward_id: address.wardId,
                    address: address.line,
                }
            }
        })
    }

    setFormFieldValue = (event) => {
        if(event.target.name == 'tax' || event.target.name == 'phone') {
            const regex = /^[0-9\b]+$/;
            if (event.target.value === '' || regex.test(event.target.value)) {
               this.setState({ formValues: { ...this.state.formValues, [event.target.name]: event.target.value } })
            }
        } else {
            this.setState({ formValues: { ...this.state.formValues, [event.target.name]: event.target.value } })
        }
    }

    renderFieldError (fieldName) {
        if (!this.state.errorByFields[fieldName]) {
            return ''
        }

        return <div className="text-danger form-text">{this.state.errorByFields[fieldName]}</div>
    }

    getAddressValue (fieldName) {
        return this.state.formValues.address && this.state.formValues.address[fieldName] ?
            this.state.formValues.address[fieldName] : null
    }

    validate () {
        const errorByFields = {}

        // Validate required fields
        const requiredFields = ['fullname', 'tax', 'phone']
        for (let i = 0; i < requiredFields.length; i++) {
            const fieldName = requiredFields[i]
            if (!this.state.formValues[fieldName]) {
                errorByFields[fieldName] = 'Bạn không được bỏ trống trường này'
            }
        }

        if (!$('.datepicker').val()) {
            errorByFields['date_of_birth'] = 'Bạn không được bỏ trống trường này'
        }

        this.setState({ errorByFields })
        const addressValid = this.addressField.current.validate()

        return Object.keys(errorByFields).length < 1 && addressValid
    }


    onClickSaveButton = async () => {
        if (!this.validate()) {
            window.scrollTo(0, 0)
            return
        }
        const { formValues} = this.state;
        var formData = new FormData();
        if(this.state.previewImg) {
            Array.from(this.state.avatar).forEach(image => {
                formData.append('avatar', image);
            });
        }
        formData.append('fullname', formValues.fullname);
        formData.append('date_of_birth', $('.datepicker').val());
        formData.append('gender', formValues.gender);
        formData.append('phone', formValues.phone);
        formData.append('tax', formValues.tax);
        formData.append('facebook', formValues.facebook);
        formData.append('zalo', formValues.zalo);
        formData.append('viber', formValues.viber);
        formData.append('skype', formValues.skype);
        formData.append('address', formValues.address.address);
        formData.append('district_id', formValues.address.district_id);
        formData.append('province_id', formValues.address.province_id);
        formData.append('ward_id', formValues.address.ward_id);
        formData.append('_method', 'PATCH');

        try {
            this.setState({ loading: true })

            // Create project
            const updateInfo = await axios.post(`${config.api.baseUrl}/update-info`, formData, {
                headers: { 'Content-Type': 'multipart/form-data' },
              });
            const response = updateInfo.data
            this.setState({
                loading: false,
                message: response
            })
            if (response.user.avatar) {
                document.getElementById('js-set-avatar').src = response.user.url_avatar + '?d=' + Date.now()
            }
            window.scrollTo(0, 0)
            setTimeout(() => {
                this.setState({
                    message: {}
                })
            }, 5000)
        } catch (e) {
            if (e.response && e.response.data) {
                window.scrollTo(0, 0)
                if (e.response.data.errors) {
                    const stateErrors = []
                    const errors = Object.values(e.response.data.errors)
                    for (let i = 0; i < errors.length; i++) {
                        stateErrors.push(errors[i].join(' '))
                    }
                    this.setState({ errors: stateErrors, loading: false, })
                } else {
                    this.setState({ errors: e.response.data.message || 'Đã có lỗi sảy ra vui lòng thử lại', loading: false, })
                }
                setTimeout(() => {
                    this.setState({
                        errors: {}
                    })
                }, 5000)
            }
        }
    }

    onImageChange = event => {
        this.setState({
          formValues: {
            ...this.state.formValues,
          },
          avatar: event.target.files,
          previewImg: URL.createObjectURL(event.target.files[0])
        });
      };

    render () {
        return (
            <div>
                <div className="container">
                {
                    this.state.errors.length > 0 && <div className="row mt-3">
                        <div className="col-12 alert alert-danger" role="alert">
                            <ul className="mb-0">
                                {this.state.errors.map((err) => <li key={err}>{err}</li>)}
                            </ul>
                        </div>
                    </div>
                }
                
                {
                    this.state.message.status && <div className="row mt-3">
                        <div className={`col-12 alert alert-${this.state.message.status}`} role="alert">
                            {this.state.message.text}
                        </div>
                    </div>
                }
                </div>
                <div className="row mt-3">
                    <div className="col-12 col-lg-8">
                        <div className="form-group">
                            <label>Họ và tên <span className="text-danger">(*)</span></label>
                            <input
                                name="fullname"
                                value={this.state.formValues.fullname || ''}
                                onChange={this.setFormFieldValue}
                                placeholder=""
                                className={classnames({
                                    'form-control': true,
                                    'is-invalid': !!this.state.errorByFields.fullname
                                })}
                            />
                            {this.renderFieldError('fullname')}
                        </div>
                        <div className="form-group">
                            <label>Ngày sinh <span className="text-danger">(*)</span></label>
                            <input
                                name="date_of_birth"
                                defaultValue={this.state.formValues.date_of_birth || ''}
                                // onChange={this.setFormFieldValue}
                                placeholder=""
                                className={classnames({
                                    'datepicker': true,
                                    'form-control': true,
                                    'is-invalid': !!this.state.errorByFields.date_of_birth
                                })}
                            />
                            {this.renderFieldError('date_of_birth')}
                        </div>

                        <div className="form-group form-inline">
                            <label className="mr-3">Giới tính</label>
                            <input
                                type="radio"
                                name="gender"
                                value="1"
                                checked={this.state.formValues.gender === '1'}
                                onChange={this.setFormFieldValue}
                                className="form-control fs-12"
                            />
                            <span className="mr-3 ml-1">Nam</span>
                            <input
                                type="radio"
                                name="gender"
                                value="0"
                                checked={this.state.formValues.gender === '0'}
                                onChange={this.setFormFieldValue}
                                className="form-control fs-12"
                            />
                            <span className="ml-1">Nữ</span>
                        </div>
                    </div>
                    <div className="col-12 col-lg-4 d-flex justify-content-center">
                        <label htmlFor="avatar">
                            <div className="position-relative cursor-pointer overflow-hidden rounded-circle margin-auto upload-avatar">
                                <img className="img-avatar" src={this.state.previewImg || this.state.formValues.url_avatar} alt=""/>
                                <div className="position-absolute w-100 h-100 bg-dark d-flex justify-content-center align-items-center bottom-0">
                                    <i className="ti-camera text-white"></i>
                                </div>
                            </div>
                        </label>
                        <input type="file" id="avatar" name="avatar" onChange={this.onImageChange} className="d-none"/>
                    </div>
                </div>
                <div className="row">
                        <div className="col-12 col-lg-6">
                            <div className="form-group">
                                <label>Số điện thoại <span className="text-danger">(*)</span></label>
                                <input
                                    name="phone"
                                    value={this.state.formValues.phone || ''}
                                    onChange={this.setFormFieldValue}
                                    placeholder=""
                                    className={classnames({
                                        'form-control': true,
                                        'is-invalid': !!this.state.errorByFields.phone
                                    })}
                                />
                                {this.renderFieldError('phone')}
                            </div>
                        </div>
                        <div className="col-12 col-lg-6">
                            <div className="form-group">
                                <label>Mã số thuế/CMND <span className="text-danger">(*)</span></label>
                                <input
                                    name="tax"
                                    value={this.state.formValues.tax || ''}
                                    onChange={this.setFormFieldValue}
                                    placeholder=""
                                    className={classnames({
                                        'form-control': true,
                                        'is-invalid': !!this.state.errorByFields.tax
                                    })}
                                />
                                {this.renderFieldError('tax')}
                            </div>
                        </div>
                        <div className="col-12 col-lg-6">
                            <div className="form-group">
                                <label>Facebook</label>
                                <input
                                    name="facebook"
                                    value={this.state.formValues.facebook || ''}
                                    onChange={this.setFormFieldValue}
                                    placeholder=""
                                    className="form-control"
                                />
                            </div>
                        </div>
                        <div className="col-12 col-lg-6">
                            <div className="form-group">
                                <label>Zalo</label>
                                <input
                                    name="zalo"
                                    value={this.state.formValues.zalo || ''}
                                    onChange={this.setFormFieldValue}
                                    placeholder=""
                                    className="form-control"
                                />
                            </div>
                        </div>
                        <div className="col-12 col-lg-6">
                            <div className="form-group">
                                <label>Skype</label>
                                <input
                                    name="skype"
                                    value={this.state.formValues.skype || ''}
                                    onChange={this.setFormFieldValue}
                                    placeholder=""
                                    className="form-control"
                                />
                            </div>
                        </div>
                        <div className="col-12 col-lg-6">
                            <div className="form-group">
                                <label>Viber</label>
                                <input
                                    name="viber"
                                    value={this.state.formValues.viber || ''}
                                    onChange={this.setFormFieldValue}
                                    placeholder=""
                                    className="form-control"
                                />
                            </div>
                        </div>
                    </div>
                <AddressForm
                        onSync={this.onSyncAddress}
                        ref={this.addressField}
                        required={true}
                        districtId={this.getAddressValue('district_id')}
                        provinceId={this.getAddressValue('province_id')}
                        wardId={this.getAddressValue('ward_id')}
                        line={this.getAddressValue('address')}
                    />
                <div className="row mt-3">
                    <div className="col-12">
                        <div className="d-flex w-100 justify-content-center">
                            <button 
                                className="btn btn-primary bg-default"
                                onClick={this.onClickSaveButton}
                                disabled={this.state.loading}
                            >
                                {this.state.loading ? 'Đang lưu...' : 'Lưu thay đổi'}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default EditForm