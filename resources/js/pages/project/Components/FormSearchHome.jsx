import React, { Component } from 'react'
import axios from 'axios'
import config from "../../../config"
import Search from "../../../components/Search"
import SearchPrice from "../../../components/SearchPrice"
import SearchProject from "../../../components/SearchProject"
import SearchTotalArea from "../../../components/SearchTotalArea";
import SearchAddress from '../../../components/SearchAddress'

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
            category_project_name: '',
            fromTotalArea: '',
            toTotalArea: '',
            wards: [],
            wardId: '',
            totalRoom: '',
            field_room: [
                {'id': 1,'name': '1+'},
                {'id': 2,'name': '2+'},
                {'id': 3,'name': '3+'},
                {'id': 4,'name': '4+'},
                {'id': 5,'name': '5+'},
                {'id': 9,'name': 'Không xác định'},

            ],
            street: 'Đường phố',
            direction: [],
            direction_house: ''
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
        this.getDirection();
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
    getWards = async (districtId) => {
        const response = await axios.get(`${config.api.baseUrl}/address/wards-by-district?district_id=${districtId}`)
        this.setState({wards: response.data});
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
    async getDirection () {
        const response = await axios.get(`${config.api.baseUrl}/posts/direction`)
        this.setState({ direction: response.data })
    }


    setPrice = (from, to) => {
        this.setState({
            priceFrom: from,
            priceTo: to
        })
    }
    setTotalArea = (value) => {
        this.setState({
            fromTotalArea: value.fromTotalArea,
            toTotalArea: value.toTotalArea
        })
    }
    setStreet = (value) => {
        this.setState({
            street: value
        })
    }

    onChangeProvince = (value, id) => {
        this.setState({
            provinceName: value,
            provinceId: id
        })
        // this.inputSearchRef.current.value = ''
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
        // this.inputSearchRef.current.value = ''
        this.setState({
            [e.target.name]: e.target.value
        })
        if(e.target.name == 'districtId'){
            this.getWards(e.target.value);
        }
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
            // this.setState({
            //     project: {},
            //     provinceId: '',
            //     provinceName: '',
            //     districtId: '',
            //     districts: []
            // })
            // this.inputSearchProvinceRef.current.value = ''
            // this.categoryProjectRef.current.value = ''
            // this.titlePrice.current.textContent = 'Mức giá'
        }
    }

    searchProject = () => {
        const { project, provinceId, districtId, projectCategories, categoryId, priceFrom, priceTo,fromTotalArea, toTotalArea,wardId,street,totalRoom, direction_house} = this.state
        const keyword = this.inputSearchRef.current.value
        const query = `keyword=${keyword}&province_id=${provinceId}&district_id=${districtId}&priceFrom=${priceFrom}&priceTo=${priceTo}&fromTotalArea=${fromTotalArea}&toTotalArea=${toTotalArea}&wardId=${wardId}&street=${street}&totalRoom=${totalRoom}&direction_house=${direction_house}`;

        if(project && project.slug) {
            window.location = `/du-an/${project.category.slug}/${project.slug}`
        } else if (categoryId) {
            const category = projectCategories.filter(category => category.id == categoryId)[0]
            window.location = `/du-an/${category.slug}?${query}`
        } else if (keyword) {
            window.location = `/tim-kiem-du-an?${query}`
        }
    }
    changeProjectName = (category) => {
        this.setState({categoryId: category.id, category_project_name: category.name})
        $('.advance-select-options').toggle('show');
    }

    render () {
        return (
            <div className="home-search-tool">
                <ul className="home-search-tab">
                    <li className="actived" ptype="38">Nhà đất bán</li>
                    <li ptype="49">Nhà đất cho thuê</li>
                </ul>
                <div className="home-search-content">
                    <div className="home-search-control">
                        <div className="search-cate">
                            <div className="select-custom">
                                <p id="lblCurrCate">{this.state.category_project_name ? this.state.category_project_name : "Loại nhà đất"}</p>
                            </div>
                            <div id="divCatagoryReOptions" className="advance-select-options">
                                <ul>
                                    {
                                        this.state.projectCategories.map((category) => (<li onClick={() => this.changeProjectName(category)} key={category.id} value={category.id}><span>{category.name}</span></li>))
                                    }
                                </ul>
                            </div>
                        </div>
                        <div className="search-input">
                            <SearchProject 
                                            onChange={this.onChangeProject}
                                            inputSearchRef={this.inputSearchRef}
                                            placeholderInput="Nhập từ khóa tìm kiếm theo tên dự án"
                                            />
                        </div>
                        <div className="search-button">
                            <button onClick={this.searchProject} className="btn-home-search" type="button">
                                <i className="ti-search"></i> Tìm kiếm
                            </button>
                        </div>
                        <div className="clear"></div>
                    </div>
                    <div className="col-12 timcode">    
                        <div className="row">
                            <div className="col-12 col-md-6 col-lg-3 mt-3 search-filter advance-select-box">
                                <Search onChange={this.onChangeProvince}
                                    inputSearchProvinceRef={this.inputSearchProvinceRef}
                                    defaultValue={this.state.provinceName} 
                                    placeholderInput="Tỉnh thành"
                                    list={this.state.provinces} />
                            </div>
                            <div className="col-12 col-md-6 col-lg-3 mt-3">
                                <select ref={this.districtRef} onChange={this.onChangeSelect} name="districtId" id="" className="form-control">
                                    <option value="">Quận huyện</option>
                                    {
                                        this.state.districts.map((district) => (<option key={district.id} value={district.id}>{district.name}</option>))
                                    }
                                </select>
                            </div>
                            <div className="col-12 col-md-6 col-lg-3 mt-3">
                                <SearchPrice titlePrice={this.titlePrice} setPrice={this.setPrice} />
                            </div>
                            <div className="col-12 col-md-6 col-lg-3 mt-3">
                                <SearchTotalArea setTotalArea={this.setTotalArea} totalArea={{fromTotalArea: this.state.fromTotalArea, toTotalArea: this.state.toTotalArea}}/>
                            </div>
                        </div>
                        {this.state.isMoreSearch ? <div className="row">
                                <div className="col-12 col-md-6 col-lg-3 mt-3">
                                <select ref={this.warRef} onChange={this.onChangeSelect} name="wardId" id="" className="form-control">
                                    <option value="">Phường xã</option>
                                    {
                                        this.state.wards.map((ward) => (<option key={ward.id} value={ward.id}>{ward.name}</option>))
                                    }
                                </select>
                            </div>
                            <div className="col-12 col-md-6 col-lg-3 mt-3">
                                <SearchAddress street={this.state.street} setStreet={this.setStreet}/>
                            </div>
                            <div className="col-12 col-md-6 col-lg-3 mt-3"> 
                                <select onChange={this.onChangeSelect} name="totalRoom" className="form-control">
                                    <option value="0">Số phòng</option>
                                    {
                                        this.state.field_room.map((item) => (<option key={item.id} value={item.id}>{item.name}</option>))
                                    }
                                </select>
                            </div>
                            <div className="col-12 col-md-6 col-lg-3 mt-3"> 
                                <select onChange={this.onChangeSelect} name="direction_house" className="form-control">
                                    <option value="0">Hướng nhà</option>
                                    {
                                        this.state.direction.map((item,index) => (<option key={index} value={index}>{item}</option>))
                                    }
                                </select>
                            </div>
                            </div>  : ""}
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