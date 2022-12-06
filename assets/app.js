import React from 'react';
import ReactDOM from 'react-dom/client';
import Home from './Home';

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  /* <React.StrictMode>*/
   // <App />

     <Home/>

  
   
  /*</React.StrictMode>*/
);
