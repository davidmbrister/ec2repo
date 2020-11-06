  // resources/assets/js/components/App.js

    import React, { Component } from 'react'
    import ReactDOM from 'react-dom'
    import { BrowserRouter, Route, Switch } from 'react-router-dom'
    import Header from './Header'
    import CourseList from './CourseList'
    import Course from './Course'

    class App extends Component {
      render () {
        return (
          <BrowserRouter>
            <div className="root-app-div">
               <p>Somethingg to change and show up on server</p> 
              <Header />
              {/* Course list does not currently take any props, it's the same data for any user at any time */}
            </div>
{/*             <Course
              // a test to show that card works on its own
              basicData={{"id":1,"user_id":1,"category_id":1,"title":"jghfj","description":"fghj","photo":null,"video":null,"status":1,"what_will_student_learn":"fghjfhj","age_group":"ages 8-12","capacity":2,"discount_price":34.12,"standard_price":34.23,"subscriber_count":0,"tags":"PHP, Laravel","created_at":"2020-09-11T21:47:21.000000Z","updated_at":"2020-09-11T21:50:32.000000Z","deleted_at":null},{"id":2,"user_id":1,"category_id":2,"title":"Minecraft","description":"A camp for kids to learn scientific concepts on a Minecraft server supervised by a camp director.","photo":null,"video":null,"status":1,"what_will_student_learn":"Cooperation, Science","age_group":"ages 8-12","capacity":19,"discount_price":23.14,"standard_price":26,"subscriber_count":0,"tags":"Cooperation, Science","created_at":"2020-09-11T22:13:43.000000Z","updated_at":"2020-09-11T22:13:43.000000Z","deleted_at":null}}
            /> */}
            <CourseList />
          </BrowserRouter>
        )
      }
    }

    ReactDOM.render(<App />, document.getElementById('app'))
