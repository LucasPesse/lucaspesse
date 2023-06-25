import React from "react";
import separation from './assets/kuriboh.png'

function Separator()
{
    return(
        <div className="flex justify-center my-80">
            <img src={separation} alt="Separator" className="separator w-32" />
        </div>
    )
}

export default Separator