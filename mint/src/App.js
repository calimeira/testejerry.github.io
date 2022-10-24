import React, { useState } from "react";
import {
  Routes,
  Route,
} from "react-router-dom";

/* Bootstrap */
import 'bootstrap/dist/js/bootstrap.bundle';

/* Font Awesome */
import "@fortawesome/fontawesome-free/css/all.min.css";

/* Global CSS */
import './Global.scss';

import Footer from './components/Footer';

/* Pages */
import Home from "./pages/Home";
import Checkout from "./pages/Checkout";
import Sucess from "./pages/Sucess";
import NotFound from "./pages/NotFound";

export default function App() {

  return (
    <div>
          <Routes>
            <Route exact path="/" element={<Home />} />
            <Route path="/checkout" element={<Checkout />} />
            <Route path="/success" element={<Sucess />} />
            <Route path="*" element={<NotFound />} />
          </Routes>
        <Footer />

    </div>
  );
}