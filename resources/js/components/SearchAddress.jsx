import React, { useRef, useState } from "react";

const SearchAddress = (props) => {
    const [street, setStreet] = useState(props.street);
    const wrapperRef = useRef();

    const onChange = (e,props) => {
        props.setStreet(e.target.value);
    }
    return (
        <div className="position-relative search-component" ref={wrapperRef}>
                <i className="ti-search"></i>
                <input 
                    onChange={(e) => onChange(e,props)} 
                    type="text" 
                    defaultValue={street}
                    className="form-control" />   
            </div>
    )
}
export default SearchAddress;