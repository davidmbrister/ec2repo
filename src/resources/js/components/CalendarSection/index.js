import React from 'react'
import Basic from './BasicCalendar'

const BasicCalendar = ({ localizer, events, onSelectEvent }) => {
  return (
     <Basic localizer={localizer} events={events} onSelectEvent={onSelectEvent} />
  )
}

export default BasicCalendar
