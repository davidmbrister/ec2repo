  // resources/assets/js/components/App.js
    import React, { useState, useEffect } from 'react'
    import ReactDOM from 'react-dom'
    import { BrowserRouter, Route, Switch } from 'react-router-dom'
    import Navbar from '../components/Navbar'
    import CampSection from '../components/CampSection'
    import { Calendar, momentLocalizer } from "react-big-calendar";
    import moment from "moment";
    //import events from '../components/utils/events'
    //import useFetch from '../components/utils/useFetch'
    import "react-big-calendar/lib/css/react-big-calendar.css";
    import BasicCalendar from '../components/CalendarSection'

    moment.locale("en-CA")
    const localizer =  momentLocalizer(moment);

    const Home = () => {
      const [authenticated, setAuthenticated] = useState('false');
      const [events, setEvents] = useState([]);

      const getEvents = async () => {
        const response =  fetch('/api/events').then(function(response) {
          response.json().then(function(parsedJson) {
            console.log('This is the parsed json', parsedJson);
            setEvents(parsedJson);
          })
        })
        console.log("events from getEvents: " + response);
       };

      const handleSelect = (e) => {
        console.log(e.title);
      }
      //console.log(this.getAttribute('data-auth'));
      useEffect(() => {
        (document.getElementById('homepage').dataset.auth === 'true') ?
        setAuthenticated('true') :
        setAuthenticated('false');
        console.log(
          `The authentication state is ${authenticated}`
        );
        getEvents();
        console.log(
          `The Events state is ${events}`
        );
        // get some calendar data from the API
      }, []);
      return (
      <BrowserRouter>
        <Navbar auth={authenticated} />  
        <Switch>
          <Route exact path="/">
            hi
          </Route>
          <Route path="/calendar">
            <BasicCalendar localizer={localizer} events={events} onSelectEvent={handleSelect} />
          </Route>
          <Route path="/camps">
            <CampSection />
          </Route>         
        </Switch>    
      </BrowserRouter>
      )
    }

    ReactDOM.render(<Home />, document.getElementById('homepage'))




