import React from "react";
import { Element } from "react-scroll";

function Contact()
{
    return(
        <Element name="contact">
            <div className="mb-10">
                <h2 className="title text-6xl text-center mb-4">Vous souhaitez me contacter ?</h2>
                <div className="flex justify-center mb-20">
                    <div className="border-4 border-green-500 w-1/4"></div>
                </div>
                <div className="flex justify-center">
                    <div>
                        <input className="my-4 rounded-md w-96 border border-black p-1" type="text" placeholder="Votre nom.." /><br/>
                        <input className="my-4 rounded-md w-96 border border-black p-1" type="email" placeholder="Votre adresse e-mail.." /><br/>
                        <textarea className="my-4 rounded-md w-96 border border-black p-1" placeholder="Votre message.."></textarea><br/>
                        <button className="border border-black bg-black text-white rounded-md p-2" type="submit">Envoyer</button>
                    </div>
                </div>
            </div>
        </Element>
    )
}

export default Contact