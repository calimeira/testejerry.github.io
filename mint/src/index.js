import React from 'react';
import reportWebVitals from './reportWebVitals';
import { BrowserRouter } from 'react-router-dom';
import { hydrateRoot } from "react-dom/client";
import { render } from "react-dom";

import "@fortawesome/fontawesome-free/css/all.min.css";

/* Components */
import App from './App';

const root = document.getElementById("root");

if (root.hasChildNodes()) {
  hydrateRoot(<React.StrictMode>
    <BrowserRouter basename={process.env.REACT_APP_URL}>
      <App />
    </BrowserRouter>
  </React.StrictMode>, root);
} else {
  render(<React.StrictMode>
    <BrowserRouter basename={process.env.REACT_APP_URL}>
      <App />
    </BrowserRouter>
  </React.StrictMode>, root);
}

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();