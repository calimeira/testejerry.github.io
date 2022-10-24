import React from 'react';
import { Routes, Route } from 'react-router';

import Home from "./pages/Home";
import Checkout from "./pages/Checkout";
import NotFound from "./pages/NotFound";
 
export default (
<Routes>
    <Route exact path="/" element={<Home />} />
    <Route path="/checkout" element={<Checkout />} />
    <Route path="/sucess" element={<Sucess />} />
    <Route path="*" element={<NotFound />} />
</Routes>
);