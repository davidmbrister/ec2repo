import React from 'react'
import { Calendar, Views } from 'react-big-calendar'
import * as dates from '../utils/dates'

//let allViews = Object.keys(Views).map(k => Views[k])

const ColoredDateCellWrapper = ({ children }) =>
  React.cloneElement(React.Children.only(children), {
    style: {
      backgroundColor: 'green',
    },
  })

const Basic = ({ localizer, events, onSelectEvent }) => (
  <Calendar
    events={events}
    views={["month"]}
    onSelectEvent={onSelectEvent}
    defaultView="month"
    style={{ height: 500, width: '65%' }}
    step={60}
    showMultiDayTimes
    max={dates.add(dates.endOf(new Date(2020, 12, 12), 'day'), -1, 'hours')}
    defaultDate={new Date()}
    components={{
      timeSlotWrapper: ColoredDateCellWrapper,
    }}
    localizer={localizer}
  />
  // another component that appears alonside the Calendar 
)

export default Basic