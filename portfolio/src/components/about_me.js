import React from "react";
import { Element } from "react-scroll";

// import Good from "./validation/good";
// import InProgress from "./validation/in_progress";
import Medium from "./validation/medium";
import QuiteGood from "./validation/quite_good";
import Worst from "./validation/worst";

import htmlcss from './assets/htmlcss.png'
import js from './assets/javascript.png';
import php from './assets/php.png';
import python from './assets/python.png';
import react from './assets/react.png';
import nextjs from './assets/nextjs.png';

import UK from './assets/UK.png';

import cv from './assets/CV PESSE Lucas.pdf';

export default function AboutMe()
{
    return(
        <Element name="description" className="border-b-2 border-black ">
            <div className="py-8">
                <h2 className="title flex justify-center text-6xl py-8">Qui suis-je ?</h2>
                <div className="flex justify-center mb-10">
                    <div className="border-4 border-pink-500 w-1/4"></div>
                </div>
            </div>
            <div className="mb-10">
                <p className="text-center"><span className="underline">En quelques mots :</span> J'ai eu un parcours atypique qui m'a fait souvent échouer mais je n'ai jamais laissé tomber cette envie de vouloir plus.</p>
                <p className="text-center">Je me suis essayé et je m'essaie a tout ce qui est possible pour trouver ce qui me plaît et qui me conviens le mieux.</p>
            </div>
            <div className="flex border-t-2 border-black">
                <div className="w-1/2 border-r-2 border-black about_me text-white">
                    <h2 className="text-center p-4 mb-8 font-bold entreprise text-4xl">Mes informations</h2>
                    <div className="pl-2">
                        <p><span className="underline underline-offset-2">Mon nom et prénom :</span> PESSE Lucas.</p>
                        <p><span className="underline underline-offset-2">Email :</span> lucas.pesse59@gmail.com</p>
                        <p><span className="underline underline-offset-2">Numéro de téléphone :</span> 06 33 00 92 73</p>
                        <p><span className="underline underline-offset-2">Dâte de naissance :</span> 14 mai 1999 (24 ans).</p>
                        <p><span className="underline underline-offset-2">Mes réseaux :</span></p>
                        <ul className="list-disc pl-16">
                            <li><a className="hover:italic" href="https://www.linkedin.com/in/lucas-pesse/" target="_blank" rel="noreferrer" >LinkeDin</a></li>
                            <li><a className="hover:italic" href="https://github.com/LucasPesse" target="_blank" rel="noreferrer">GitHub</a></li>
                        </ul>
                        <p><span className="underline underline-offset-2">État actuel :</span> Recherche d'une alternance pour ma formation.</p>
                        <div className="mt-auto">
                            <a href={cv} target="_blank" rel="noreferrer"><button className="border border-black bg-black text-white rounded-md p-1 hover:bg-slate-800 hover:shadow-lg mt-24">Accédez à mon CV</button></a>
                        </div>
                    </div>
                </div>
                <div className="w-1/2 border-l-2 border-black bg-white">
                    <h2 className="text-center p-4 mb-8 font-bold entreprise text-4xl">Mes Compétences</h2>
                    <div className="flex justify-center mb-4">
                        <img src={htmlcss} alt="HTML CSS logos" className="w-24" />
                        <div  className="my-auto">
                            <Medium/>
                        </div>
                    </div>
                    <div className="flex justify-center mb-4">
                        <img src={php} alt="PHP logo" className="w-20" />
                        <div  className="my-auto">
                            <QuiteGood/>
                        </div>
                    </div>
                    <div className="flex justify-center mb-4">
                        <img src={js} alt="javascript logo" className="w-20"/>
                        <div  className="my-auto">
                            <Medium/>
                        </div>
                    </div>
                    <div className="flex justify-center mb-4">
                        <img src={react} alt="react logo" className="w-20" />
                        <div  className="my-auto">
                            <Medium/>
                        </div>
                    </div>
                    <div className="flex justify-center mb-4">
                        <img src={nextjs} alt="NextJS logo" className="w-20" />
                        <div  className="my-auto">
                            <Worst/>
                        </div>
                    </div>
                    <div className="flex justify-center mb-4">
                        <img src={python} alt="Python logo" className="w-20" />
                        <div  className="my-auto">
                            <Worst/>
                        </div>
                    </div>
                    <div className="flex justify-center mb-4">
                        <img src={UK} alt="English flag" className="w-20" />
                        <div  className="my-auto">
                            <QuiteGood/>
                        </div>
                    </div>
                </div>
            </div>
        </Element>
    )
}