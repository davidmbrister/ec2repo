  // resources/assets/js/components/App.js
    import React, { useState, useEffect } from 'react'
    import ReactDOM from 'react-dom'
    import { BrowserRouter, Route, Switch } from 'react-router-dom'
    import Navbar from '../components/Navbar'
    import CampSection from '../components/CampSection'
    //import HeroSection from '../components/HeroSection'
    const Home = () => {
      const [authenticated, setAuthenticated] = useState('false');
      //console.log(this.getAttribute('data-auth'));
      useEffect(() => {
        (document.getElementById('homepage').dataset.auth === 'true') ?
        setAuthenticated('true') :
        setAuthenticated('false');
        console.log(
          `The authentication state is ${authenticated}`
        );
      }, []);
      return (
        <BrowserRouter>
        <div className="root-app-div">
          <Navbar auth={authenticated} />
          {/* Course list does not currently take any props, it's the same data for any user at any time */}
        </div>
        <CampSection />
         
      </BrowserRouter>
      )
    }

    ReactDOM.render(<Home />, document.getElementById('homepage'))




