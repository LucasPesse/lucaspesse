import React from "react";
import { Element } from "react-scroll";

import eic from "./assets/eic.png";
import gaston_berger from './assets/gaston_berger.png'
import webac from './assets/webacademie.png'

import { Carousel } from 'react-responsive-carousel';
import "react-responsive-carousel/lib/styles/carousel.min.css";

function Education()
{
    return(
        <Element name="education">
            <h2 className="title text-center text-6xl">Formation</h2>
            <div className="flex justify-center">
                <div className="border-4 border-blue-500 w-1/4"></div>
            </div>
            <Carousel autoPlay infiniteLoop showStatus={false}>
                <div className="flex justify-center my-8">
                    <div className="flex justify-center border-b my-4 border-black">
                        <div className="w-1/2 flex justify-center">
                            <div className="w-60 mr-3">
                                <img src={eic} alt="EIC logo"/>
                            </div>
                            <div className="my-auto">
                                <p>Lycée EIC Tourcoing</p>
                                <p>Baccalauréat STI2D</p>
                                <p>2016 - 2017</p>
                            </div>
                        </div>
                        <div className="w-1/2 my-auto">
                            <p className="italic text-xl text-center">Cursus technologique orienté scientifique avec une option informatique qui m'a donné les bases du développement.</p>
                        </div>
                    </div>
                </div>
                <div className="flex justify-center mt-8">
                    <div className="flex justify-center border-b my-4 border-black">
                        <div className="w-1/2 flex justify-center">
                            <div className="w-60 mr-3">
                                <img src={gaston_berger} alt="Gaston berger logo" className="w-48 mr-3" />
                            </div>
                            <div className="my-auto">
                                <p>Lycée Gaston berger</p>
                                <p>BTS SIO </p>
                                <p>2017 - 2019</p>
                            </div>
                        </div>
                        <div className="w-1/2 my-auto">
                            <p className="italic text-xl text-center">Lors de cette formation, j'ai appris les bases du développement d'application, de l'algorithmique et du développement web.</p>
                        </div>
                    </div>
                </div>
                <div className="flex justify-center mt-8">
                    <div className="flex justify-center border-b my-4 border-black h-60">
                        <div className="w-1/2 flex justify-center">
                            <div className="w-60 mr-3 my-auto">
                                <img src={webac} alt="webac logo" className="w-48 h-10 mr-3 my-auto" />
                            </div>
                            <div className="my-auto">
                                <p>Epitech Lille</p>
                                <p>Webacademie</p>
                                <p>2022 - Maintenant</p>
                            </div>
                        </div>
                        <div className="w-1/2 my-auto">
                            <p className="italic text-xl text-center">Formation poussée et entièrement orientée autour du développement web ainsi que tous ses outils et les compétences nécessaires.</p>
                        </div>
                    </div>
                </div>
            </Carousel>
            <h2 className="title text-center text-6xl pb-4 mt-32">Projets scolaires</h2>
            <div className="flex justify-center">
                <div className="border-4 border-purple-700 w-1/4"></div>
            </div>
        </Element>
    )
}

export default Education