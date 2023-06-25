import React from "react";
import { Carousel } from 'react-responsive-carousel';
import "react-responsive-carousel/lib/styles/carousel.min.css";


function HobbySkills()
{
    return(
        <div>
            <Carousel autoPlay infiniteLoop interval={6000} showStatus={false} showIndicators={false}>
                <div className="w-4/5 mx-auto mt-8">
                    <h2 className="entreprise font-bold mb-8 text-4xl underline decoration-sky-500">Soft Skills</h2>
                    <div>
                        <div className="flex justify-center">
                            <div className="w-1/3 mx-auto my-4 bg-sky-500 p-2 rounded-xl hover:shadow-lg">
                                <p className="italic">Communation</p>
                            </div>
                            <div className="w-1/3 mx-auto my-4 bg-sky-500 p-2 rounded-xl hover:shadow-lg">
                                <p className="italic">Travail d'équipe</p>
                            </div>
                        </div>
                        <div className="flex justify-center">
                            <div className="w-1/3 mx-auto my-4 bg-sky-500 p-2 rounded-xl hover:shadow-lg">
                                <p className="italic">Adaptabilité</p>
                            </div>
                            <div className="w-1/3 mx-auto my-4 bg-sky-500 p-2 rounded-xl hover:shadow-lg">
                                <p className="italic">A l'écoute</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="w-4/5 mx-auto mt-8">
                    <h2 className="entreprise font-bold mb-8 text-4xl underline decoration-green-500">Mad Skills</h2>
                    <div>
                        <div className="bg-green-500 p-4 rounded-xl">
                            <h3 className="title text-3xl">Partage de connaissance</h3>
                            <p>Au sein d'Epitech j'ai animé des Coding Club (des ateliers de code pour initier les plus jeunes).</p>
                            <p>J'ai été formateur pendant une durée de deux semaines pour des étudiants d'une autre école  pour qu'ils apprennent le développement web.</p>
                        </div>
                    </div>
                </div>
                <div className="w-4/5 mx-auto mt-8">
                    <h2 className="entreprise font-bold mb-8 text-4xl underline decoration-red-500">Hobby</h2>
                    <div>
                        <div className="flex justify-center">
                            <div className="w-1/4 hover:shadow-lg rounded-xl p-2 bg-red-500 my-4 mx-auto">
                                <p className="italic">Musique</p>
                            </div>
                            <div className="w-1/4 hover:shadow-lg rounded-xl p-2 bg-red-500 my-4 mx-auto">
                                <p className="italic">Cinéma</p>
                            </div>
                            <div className="w-1/4 hover:shadow-lg rounded-xl p-2 bg-red-500 my-4 mx-auto">
                                <p className="italic">Jeux-vidéos</p>
                            </div>
                        </div>
                        <div className="flex justify-center">
                            <div className="w-1/4 hover:shadow-lg rounded-xl p-2 bg-red-500 my-4 mx-auto">
                                <p className="italic">Mangas</p>
                            </div>
                            <div className="w-1/4 hover:shadow-lg rounded-xl p-2 bg-red-500 my-4 mx-auto">
                                <p className="italic">Animes</p>
                            </div>
                            <div className="w-1/4 hover:shadow-lg rounded-xl p-2 bg-red-500 my-4 mx-auto">
                                <p className="italic">Littérature</p>
                            </div>
                        </div>
                    </div>
                </div>
            </Carousel>
        </div>
    )
}

export default HobbySkills