import React from "react";

import Seo from '../components/seo';

import "../styles/pages/sucess.scss";

import { environment } from '../enviroments/enviroment';

export default function Sucess() {

    const content = 'Leo Ponzio lanza su colección de 3000 NFT únicos, generados con una gran variedad de propiedades representativas de él y almacenados en la red de Ethereum."';
    const title = 'Colección NFT de Leo Ponzio - Capitán eterno';
    const keywords = '';

    return (
      <>
        <div id="sucess-page">
            <section class="pt-7 pb-20 sucess-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <div class="circle-blur one bg-img"></div>
                                <h1 class="title-secondary big">¡Muchas gracias!</h1>
                                <p>La transacción se realizó correctamente</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-primary">Ir a Open Sea<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </>
    );
  }