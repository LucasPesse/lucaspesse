import React from "react";

import my_cinema from './assets/screenshot/my_cinema.png'
import my_twitter from './assets/screenshot/my_twitter.png'

import { Carousel } from 'react-responsive-carousel';
import "react-responsive-carousel/lib/styles/carousel.min.css";

function Projects()
{
    return(
        <div className="flex justify-center mt-40">
            <Carousel autoPlay infiniteLoop interval={6000} showStatus={false} showIndicators={false}>
                    <div className="w-1/2 mx-auto">
                        <h3 className="text-center entreprise font-bold">Projet My_cinema</h3>
                        <img src={my_cinema} className="w-4/5 rounded-xl mx-auto" alt="screen my cinema" />
                    </div>
                    <div className="w-1/2 mx-auto">
                        <h3 className="text-center entreprise font-bold">Projet my_twitter</h3>
                        <img src={my_twitter} className="w-4/5 rounded-xl mx-auto" alt="screen my cinema" />
                    </div>
            </Carousel>
        </div>
    )
}

export default Projects