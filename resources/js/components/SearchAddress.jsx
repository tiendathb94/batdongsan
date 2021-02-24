import React, { useEffect, useRef, useState } from 'react'

const SearchAddress = (props) => {
    const [isShow, setIsShow] = useState(false);
    const [street, setStreet] = useState(props.street);
    const wrapperRef = useRef();
    useEffect(() => {
        document.addEventListener('click', handleClick)
    })

    const handleClick = (event) => {
        const { target } = event
        if(!wrapperRef.current.contains(target)){
            setIsShow(false);
        }
    }
    const onFocusInput = () => {
        setIsShow(true)
    }
    const onChange = (e,props) => {
        setStreet(e.target.value);
        props.setStreet(e.target.value);
    }
    
    return (
        <div className="position-relative search-component" ref={wrapperRef}>
            {/* <i className="ti-search"></i> */}
            <input 
                onChange={(e) => onChange(e,props)}
                onFocus={onFocusInput} 
                type="text" 
                className="form-control" 
                placeholder="Đường phố"
                defaultValue={street}
                />
                
            {
                isShow && (
                    <ul className="border">
                        <li>Đường phố</li>
                    </ul>
                )
            }
            
        </div>
    )
}

export default SearchAddress