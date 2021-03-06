import React, { useState } from "react";
import Fetch from "../utils/Fetch";
import { createUseStyles } from 'react-jss';
import { Button } from '@material-ui/core';
import Box from '@material-ui/core/Box';
import { makeStyles } from '@material-ui/core/styles';
// Ask yourself when packaging modular styles in your styled component:
// Are these styles all modular? In this case they are. And so could simply be dropped anywhrt and look fine.
// However, if you need to apply a parent style such as a grid for formatting, then you probably want some custom CSS in a stylesheet
// You could also have a compatible Parent Component (CampList) employ a 'display:grid' interface which
// Could be tapped into by a modifiable grid display rules in CampList (as of September 2020 I have the grid
// Rules hardcoded in CampList)

const useButtonStyles = makeStyles({
  root: {
    background: 'linear-gradient(45deg, #55ABD1 30%, #AB529F 90%)',
    border: 0,
    borderRadius: 3,
    boxShadow: '0 3px 5px 2px rgba(255, 105, 135, .3)',
    color: 'white',
    height: 40,
    padding: '0 25px',
  },
});


const useCampCardStyles = createUseStyles({
      card: {
        'background-color': 'white',
        'border-radius': '10px',
        'box-shadow': '5px 5px 8px blue, 10px 10px 8px black',
        //'box-shadow': '0 2px 20px rgba(0,0,0,0.1)',
        overflow: 'hidden',
        width: '300px',
      '&:hover': {
        translate: '5px 5px',
        background: 'aliceblue',
        'transition-duration': '250ms'
      }
      },
      cardBody: {
        display: 'flex',
        'flex-direction': 'column',
        'align-items': 'start',
        padding: '20px',
        'min-height': '250px'
      },
      tag: {
        'background-color': 'rgb(79, 218, 98)',
        'border-radius': '50px',
        'font-size': '12px',
        color: '#fff',
        margin: 0,
        padding: '2px 10px',
        'text-transform': 'uppercase',
      }
})

export default function Camp({basicData}) {
  const [details, setDetails] = useState();
  const classes = useCampCardStyles();
  const buttonClasses = useButtonStyles();

  const handleClick = (e) => {
    return (
        <Fetch //the render success in here should be an imported component
        uri={`/api/camps/${e}`} // the data here has already been fetched, but maybe other routes could pracitcally be hit from links on the card
        renderSuccess={({ data }) => (
                setDetails(data.description)                
          )}
        />
     )
     
    }

  return (
    <>
     
       <div className={classes.card}>
          <div className={classes.cardHeader}>
              <img src="./images/city.jpeg" alt="" />
          </div>

          <div className={classes.cardBody}>
            <span className={classes.tag}> {basicData.tags} </span>

            <h4 className={classes.testClass}>{basicData.title}</h4>
            <div dangerouslySetInnerHTML={{ __html: `${basicData.description}` }} />
                    <Box m={2}>
                      <Button className={buttonClasses.root} id={basicData.id} onClick={() => handleClick(basicData.id)} variant="outlined" color="primary">Get started</Button>
                    </Box>
                    
                    <Fetch //the render success in here should be an imported component
                        uri={"/api/camps/" + basicData.id} // the data here has already been fetched, but maybe other routes could pracitcally be hit from links on the card
                        renderSuccess={({ data }) => (

                          <div dangerouslySetInnerHTML={{ __html: `${basicData.description}` }} />
                            
                        )}
                    />
                     <div>
                      {details}
                      </div>
          </div>
        
        </div>

    </>

  );


}
