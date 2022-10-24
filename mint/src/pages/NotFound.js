import React from "react";

import Seo from '../components/seo';

import "../styles/pages/notfound.scss";

import { environment } from '../enviroments/enviroment';

export default function NotFound() {

    const content = 'Leo Ponzio lanza su colección de 3000 NFT únicos, generados con una gran variedad de propiedades representativas de él y almacenados en la red de Ethereum.';
    const title = 'Colección NFT de Leo Ponzio - Capitán eterno';
    const keywords = '';

    return (
      <div>

        <Seo content={content} title={title} keywords={keywords}></Seo>

        <h2>404 Error</h2>
      </div>
    );
  }