import {createUseStyles} from 'react-jss';

export const useCampCardStyles = createUseStyles({

      postGrid: {
        'background-color': 'antiquewhite',
        display: 'grid',
        'grid-template-columns': 'repeat(3, 1fr)',
        width: '940px',
        gap: '20px',
        margin: 'auto',
      },

      

      card: {
        'background-color': 'white',
        'border-radius': '10px',
        'box-shadow': '0 2px 20px rgba(0,0,0,0.1)',
        overflow: 'hidden',
        width: '300px',

        
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
/* 
       test: {
        color: 'blue'
        } */

    /*   cardBody: {
        display: 'flex',
        'flex-direction': 'column',
        'align-items': 'start',
        padding: '20px',
        'min-height': '250px'
      },

      tag: {
        'background-color': 'springgreen',
        'border-radius': '50px',
        'font-size': '12px',
        color: '#fff',
        margin: 0,
        padding: '2px 10px',
        'text-transform': 'uppercase'
      } */
})