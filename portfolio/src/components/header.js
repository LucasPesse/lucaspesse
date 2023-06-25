import React from "react";
import { Link } from "react-scroll";

function Header()
{
    return(
        <header>
            
            <nav>
                <ol className="flex justify-center">
                    <Link to="description"><li className="cursor-pointer mx-8 border border-purple-800 bg-white rounded-lg p-2 hover:shadow-lg">Qui suis-je ?</li></Link>
                    <Link to="education"><li className="cursor-pointer mx-8 border border-purple-800 bg-white rounded-lg p-2 hover:shadow-lg">Parcours scolaire</li></Link>
                    <Link to="professional"><li className="cursor-pointer mx-8 border border-purple-800 bg-white rounded-lg p-2 hover:shadow-lg">Expériences professionnelles</li></Link>
                    <Link to="contact"><li className="cursor-pointer mx-8 border border-purple-800 bg-white rounded-lg p-2 hover:shadow-lg">Me contacter</li></Link>
                </ol>
            </nav>
        </header>
    )
}

export default Header;