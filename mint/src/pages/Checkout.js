import React from "react";

import Seo from '../components/seo';

import "../styles/pages/checkout.scss";

import { environment } from '../enviroments/enviroment';

export default function Checkout() {

    const content = 'Leo Ponzio lanza su colección de 3000 NFT únicos, generados con una gran variedad de propiedades representativas de él y almacenados en la red de Ethereum."';
    const title = 'Colección NFT de Leo Ponzio - Capitán eterno';
    const keywords = '';

    return (
      <>
        <div id="checkout-page" className="body-pages">              
            <section className="pt-0 pb-10 new-nft-section py-sm-8">
                <div className="circle-blur one bg-img"></div>
                <div className="circle-blur two bg-img"></div>  
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className="text-center">
                                <h1 className="title-secondary mb-3">¡Este es <br className="d-block d-sm-none"/>tu nuevo NFT!</h1>
                            </div>
                            <div className="gold-border">
                                <div className="nft-resume">
                                    <div className="thumb-nft">
                                        <figure className="thumb-nft-figure">
                                            <img src="img/img-ponzio-nft-1.png" alt="ponzio" className="img-fluid thumb-nft-img"/>
                                            <figcaption className="thumb-nft-figcaption">
                                                <h6 className="thumb-nft-title">Ponzio #0001</h6>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div className="info-nft-box">
                                        <div className="attributes-box">
                                            <h6 className="atributtes-title">Atributos</h6>
                                            <table className="attributes-table d-none d-sm-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Fondo</td>
                                                                        <td colspan="1">Cara</td>
                                                                        <td colspan="1">Ojos</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Negro</td>
                                                                        <td colspan="1">Adulto</td>
                                                                        <td colspan="1">Natural</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Ropa</td>
                                                                        <td colspan="1">Tatuajes</td>
                                                                        <td colspan="1">Boca/barba</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Traje</td>
                                                                        <td colspan="1">-</td>
                                                                        <td colspan="1">sonriendo</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Pelo</td>
                                                                        <td colspan="1">Gorro</td>
                                                                        <td colspan="1">Anteojos</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">corto</td>
                                                                        <td colspan="1">sin gorro</td>
                                                                        <td colspan="1">river</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table className="attributes-table d-table d-sm-none">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Fondo</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Negro</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Cara</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Adulto</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Ojos</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Natural</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Ropa</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Traje</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Tatuajes</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">-</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Boca/barba</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">sonriendo</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Pelo</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">corto</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Gorro</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">sin gorro</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                            <table className="attributes-subtable" border="0">
                                                                <thead className="title-items-table">
                                                                    <tr>
                                                                        <td colspan="1">Anteojos</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody className="description-items-table">
                                                                    <tr>
                                                                        <td colspan="1">river</td>
                                                                    </tr>                                        
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div className="mt-5">
                                            <h6 className="atributtes-title">Propietario</h6>
                                            <p>Este NFT pertenece a @xxxxxxx</p>
                                        </div>
                                        <div className="mt-5">
                                            <h6 className="atributtes-title">Enviar tu Ponziocollection</h6>
                                            <form action="/checkout" method="post" enctype="multipart/form-data" novalidate className="needs-validation contact-form adress-wallet-form">                                                
                                                <div>
                                                    <input type="text" required className="form-control" id="billeteraDireccion" placeholder="Ingresar dirección de billetera"/>
                                                    <div className="invalid-feedback">*Campo obligatorio</div>
                                                </div>
                                                <div className="d-flex justify-content-end">
                                                    <button className="btn btn-primary mt-2">Enviar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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