// CKEC Public page road map/ conceptualization
// a basic Style model: https://www.filathemes.com/preview/?theme=Education%20LMS

/* create a rudimentary Camp list component
    1. Fetch all the relevant data for an unregistered user of the site with the Fetch component pattern
      - test by fetching json and outputting raw data.
    
    2.Style HEADER element and footer for proof of concept

    3. Add shopping cart that uses React context (local storage)
*/
import React from "react";
import Fetch from "../utils/Fetch";
import Camp from "./Camp";
import {createUseStyles} from 'react-jss';

const useCampCardStyles = createUseStyles({
        postGrid: {
        'background-color': 'antiquewhite',
        display: 'grid',
        'grid-template-columns': 'repeat(3, 1fr)',
        width: '940px',
        gap: '20px',
        margin: 'auto',
      }
})

export default function CampList () {
  const classes = useCampCardStyles();
  return (
    <Fetch
      uri={`/api/camps`}
      renderSuccess={({ data }) => (
          <div className={classes.postGrid}>
            {
              data.map(singleCampData =>
                    <Camp 
                      key={singleCampData.id} // React wants unique keys for child components of same type
                      basicData={singleCampData} 
                    />         
            )}
          </div>
      )}
    />
  );
}

