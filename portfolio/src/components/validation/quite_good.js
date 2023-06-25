import React from "react";
import dot from '../assets/dot.png';
import white_dot from '../assets/white_dot.png'

function QuiteGood()
{
    return(
        <div className="flex justify-center">
            <img className="w-10 h-10" alt="validation" src={white_dot} />
            <img className="w-10 h-10" alt="validation" src={white_dot} />
            <img className="w-10 h-10" alt="validation" src={white_dot} />
            <img className="w-10 h-10" alt="validation" src={white_dot} />
            <img className="w-10 h-10" alt="validation" src={dot} />
        </div>
    )
}

export default QuiteGood