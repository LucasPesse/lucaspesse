import React from "react";
import { Element } from "react-scroll";

function Professional()
{
    return(
        <Element name="professional">
            <h2 className="title text-center text-6xl mb-4">Expériences professionnelles</h2>
            <div className="flex justify-center">
                <div className="border-4 border-red-600 w-1/4"></div>
            </div>
            <div className="flex justify-center my-8">
                <div className="w-5/6 flex justify-center">
                    <div className="w-1/3 m-4 text-center shadow-2xl rounded-lg title_back p-4">
                        <h3 className="entreprise text-4xl text-center my-2 font-bold p-2">Inicio</h3>
                        <div className="my-2">
                            <p className="text-slate-500 text-xl">Stage - Développeur web</p>
                            <p className="text-slate-500 text-xl">Janvier 2018 À Février 2018, Villeneuve d'ascq</p>
                        </div>
                        <p className="">Création d'une page pour le site internet de l'entreprise.</p>
                        <p className=""><span className="underline">Compétences utilisées :</span> HTML / CSS / PHP</p>
                    </div>
                    <div className="w-1/3 m-4 text-center shadow-2xl rounded-lg title_back p-4">
                        <h3 className="entreprise text-4xl text-center my-2 font-bold p-2">Haghebaert et Fremaux</h3>
                        <div className="my-2">
                            <p className="text-slate-500 text-xl">Agent de production</p>
                            <p className="text-slate-500 text-xl">Juin 2019 à Août 2019, Villeneuve d'ascq</p>
                        </div>
                        <p className="">Agent de production de peinture.</p>
                    </div>
                    <div className="w-1/3 m-4 text-center shadow-2xl rounded-lg title_back p-4">
                        <h3 className="entreprise text-4xl text-center my-2 font-bold p-2">Picard</h3>
                        <div className="my-2">
                            <p className="text-slate-500 text-xl">CDI - Vendeur assistant</p>
                            <p className="text-slate-500 text-xl">Mai 2020 À Mars 2022, Villeneuve d'ascq</p>
                        </div>
                        <p className="">Polyvalent dans les tâches, je devais aussi bien m'occuper de la mise en rayon que de la caisse mais aussi du traitement de marchandise.</p>
                    </div>
                </div>
            </div>
        </Element>
    )
}

export default Professional