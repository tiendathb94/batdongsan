import React, { Component } from 'react'
import axios from 'axios'
import config from "../../../config"
import Search from "../../../components/Search"
import SearchPrice from "../../../components/SearchPrice"
import SearchProject from "../../../components/SearchProject"

class FormSearchHome extends Component {
    constructor (props) {
        super(props)

        this.state = {
            isMoreSearch: false,
            keyword: '',
            projectCategories: [],
            categoryId: '',
            provinces: [],
            provinceId: '',
            provinceName: '',
            districts: [],
            districtId: '',
            priceFrom: '',
            priceTo: '',
            project: '',
        }
        this.inputSearchRef = React.createRef()
        this.categoryProjectRef = React.createRef()
        this.inputSearchProvinceRef = React.createRef()
        this.districtRef = React.createRef()
        this.titlePrice = React.createRef()
    }

    openCollapseMoreSearch = () => {
        this.setState({
            isMoreSearch: !this.state.isMoreSearch
        })
    }

    componentDidMount () {
        this.getProjectCategories();
        this.getProvinces();
    }

    getProjectCategories = async () => {
        const response = await axios.get(`${config.api.baseUrl}/category/by-destination-entity?destination_entity=App\\Entities\\Project`);
        this.setState({
            projectCategories: response.data
        })
    }

    getProvinces = async () => {
        const response = await axios.get(`${config.api.baseUrl}/address/provinces`);
        this.setState({
            provinces: response.data
        })
    }

    getDistricts = async (provinceId, districtId) => {
        const response = await axios.get(`${config.api.baseUrl}/address/districts-by-province?province_id=${provinceId}`);
        this.setState({
            districts: response.data
        })
        if (districtId) {
            this.districtRef.current.value = districtId
        }
    }

    setPrice = (from, to) => {
        this.setState({
            priceFrom: from,
            priceTo: to
        })
    }

    onChangeProvince = (value, id) => {
        this.setState({
            provinceName: value,
            provinceId: id
        })
        this.inputSearchRef.current.value = ''
        if (id) {
            this.getDistricts(id)
        } else {
            this.setState({
                districts: [],
                districtName: '',
                districtId: '',
                provinceId: '',
                priceFrom: '',
                priceTo: '',
            })
        }
    }

    onChangeSelect = (e) => {
        this.inputSearchRef.current.value = ''
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    onChangeProject = (project) => {
        if (project && project.id) {
            this.getDistricts(project.address.province_id, project.address.district_id)
            this.categoryProjectRef.current.value = project.category_id
            this.setState({
                project: project,
                provinceId: project.address.province_id,
                provinceName: project.address.province.name,
                districtId: project.address.district_id
            })
            this.inputSearchProvinceRef.current.value = project.address.province.name
        } else {
            this.setState({
                project: {},
                provinceId: '',
                provinceName: '',
                districtId: '',
                districts: []
            })
            this.inputSearchProvinceRef.current.value = ''
            this.categoryProjectRef.current.value = ''
            this.titlePrice.current.textContent = 'Mức giá'
        }
    }

    searchProject = () => {
        const { project, provinceId, districtId, projectCategories, categoryId, priceFrom, priceTo } = this.state
        const keyword = this.inputSearchRef.current.value
        if(project && project.slug) {
            window.location = `/du-an/${project.category.slug}/${project.slug}`
        } else if (categoryId) {
            const category = projectCategories.filter(category => category.id == categoryId)[0]
            window.location = `/du-an/${category.slug}?province_id=${provinceId}&district_id=${districtId}&priceFrom=${priceFrom}&priceTo=${priceTo}`
        } else if (keyword) {
            window.location = `/tim-kiem-du-an?keyword=${keyword}`
        }
    }

    render () {
        return (
            <div className="home-search-tool">
                <ul class="home-search-tab">
                    <li class="actived" ptype="38">Nhà đất bán</li>
                    <li ptype="49">Nhà đất cho thuê</li>
                </ul>
                <div class="home-search-content">
                    <div class="home-search-control">
                        <div class="search-cate">
                            <div class="select-custom">
                                <o id="lblCurrCate">Loại nhà đất</o>
                            </div>
                            <div id="divCatagoryReOptions" class="advance-select-options">
                                <ul ref={this.categoryProjectRef} onChange={this.onChangeSelect} name="categoryId" id="">
                                    <li id="3232" class="click_pr"><span>Loại dự án</span></li>
                                    {
                                        this.state.projectCategories.map((category) => (<li onClick="selected({category.name})" key={category.id} value={category.id}><span>{category.name}</span></li>))
                                    }
                                </ul>
                            </div>
                        </div>
                        <div class="search-input">
                            <SearchProject 
                                            onChange={this.onChangeProject}
                                            inputSearchRef={this.inputSearchRef}
                                            placeholderInput="Nhập từ khóa tìm kiếm theo tên dự án"
                                            />
                        </div>
                        <div class="search-button">
                            <button onClick={this.searchProject} className="btn-home-search" type="button">
                                <i className="ti-search"></i> Tìm kiếm
                            </button>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div className="col-12 timcode">
                        {
                            this.state.isMoreSearch && (
                                <div className="row">
                                    <div className="col-12 col-md-6 col-lg-4 mt-4 search-filter advance-select-box">
                                        <Search onChange={this.onChangeProvince}
                                            inputSearchProvinceRef={this.inputSearchProvinceRef}
                                            defaultValue={this.state.provinceName} 
                                            placeholderInput="Tỉnh thành"
                                            list={this.state.provinces} />
                                    </div>
                                    
                                    <div className="col-12 col-md-6 col-lg-4 mt-4">
                                        <select ref={this.districtRef} onChange={this.onChangeSelect} name="districtId" id="" className="form-control">
                                            <option value="">Quận huyện</option>
                                            {
                                                this.state.districts.map((district) => (<option key={district.id} value={district.id}>{district.name}</option>))
                                            }
                                        </select>
                                    </div>
                                    <div className="col-12 col-md-6 col-lg-4 mt-4">
                                        <SearchPrice titlePrice={this.titlePrice} setPrice={this.setPrice} />
                                    </div>
                                </div>
                            )
                        }
                        
                        <div className="row mt-3">
                            <div className="col font-italic">
                                {
                                    this.state.isMoreSearch ? (
                                    <div className="d-flex justify-content-center align-items-center"><span className="cursor-pointer" onClick={this.openCollapseMoreSearch}>Thu gọn chỉ tiêu tìm kiếm <i className="ti-angle-up ml-2"></i></span></div>
                                    ) : (
                                        <div className="d-flex justify-content-center align-items-center"><span className="cursor-pointer" onClick={this.openCollapseMoreSearch}>Mở rộng chỉ tiêu tìm kiếm <i className="ti-angle-down ml-2"></i></span></div>
                                    )
                                }
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default FormSearchHome