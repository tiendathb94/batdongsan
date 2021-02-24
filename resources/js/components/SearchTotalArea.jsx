import React, { useEffect, useRef, useState } from 'react'

const SearchTotalArea = (props) => {
    const [totalArea, setTotalArea] = useState(props.totalArea);
    const [isShow, setIsShow] = useState(false);
    const [style, setStyle] = useState({color: "black!important"});
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

    const onChange = (e, props) => {
        setTotalArea({...totalArea,[e.target.name] : e.target.value})
        props.setTotalArea({...totalArea,[e.target.name] : e.target.value})
    }

    return (
        <div className="position-relative search-component" ref={wrapperRef}>
            <div className="position-relative search-price-component" onClick={() => setIsShow(true)}   >
                {/* <i className="ti-search"></i> */}
                <span>{totalArea.fromTotalArea || totalArea.toTotalArea ? totalArea.fromTotalArea + "-" + totalArea.toTotalArea + " m2" : "Diện tích"}</span>
            </div>
            {
                isShow && (
                    <div className="bg-white">
                        <div className="d-flex justify-content-center p-2 border">
                            <input type="number" className="text-center form-control" onChange={(e) => onChange(e,props)} name="fromTotalArea"   style={style} value={totalArea.fromTotalArea}/>
                            <span className="mx-2"> - </span>
                            <input type="number" className="text-center form-control" onChange={(e) => onChange(e,props)} name="toTotalArea" style={style} value={totalArea.toTotalArea}/>
                        </div>
                    </div>
                )
            }
        </div>
    )
}

export default SearchTotalArea