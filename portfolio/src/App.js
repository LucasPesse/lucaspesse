import './App.css';
import pp from './components/assets/MicrosoftTeams-image.png'
import Header from './components/header';
import AboutMe from './components/about_me';
import Separator from './components/separator';
import Education from './components/education';
import Projects from './components/projects';
import Professional from './components/professional';
import Contact from './components/contact';
import HobbySkills from './components/hobby_skill';

function App() {
  return (
    <div>
      <img src={pp} className='w-24 mt-4 ml-4 hover:shadow-lg rounded-lg' alt="Me" />
      <div className='text-center my-64'>
        <h1 className='title text-7xl mb-4'>Mon Portfolio</h1>
        <p className='text-lg italic'>Moi c'est PESSE Lucas, web developer - Back-end</p>
      </div>
      <Header/>
      <Separator/>
      <AboutMe/>
      <HobbySkills/>
      <Separator/>
      <Education/>
      <Projects/>
      <Separator/>
      <Professional/>
      <Separator/>
      <Contact/>
    </div>
  );
}

export default App;
