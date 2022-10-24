import React, { useState, useContext } from "react";
import { Link } from "react-router-dom";
import '../Global.scss';
import "../styles/pages/home.scss";
import "../styles/imports.scss";
import "../styles/imports-helpers.scss";
import "../controller";
import '../styles/layout/header.scss';
import '../styles/components/navbar.scss';
import Web3 from 'web3';
import Web3Utils from 'web3-utils'
import { abi, smart_contract_address, eth_network_id } from '../components/contractInfo';

export default function Home() {

    const [account, setAccount] = useState(null);
    const [contract, setContract] = useState(null);
    const [totalSupply, setTotalSupply] = useState(null);

    async function connectWallet() {
        if (window.ethereum) {
            var web3 = new Web3(window.ethereum)
            if (!web3) {
                alert('¡Debe instalar Metamask para realizar la compra!')
            }
            if (await web3.eth.net.getId() !== eth_network_id) {
                alert('La red es incorrecta. ¡Se debe conectar a la red de Ethereum!')
            } else {
                await window.ethereum.send('eth_requestAccounts')
                var accounts = await web3.eth.getAccounts();
                setAccount(accounts[0]);
                document.getElementById('wallet-address').textContent = accounts[0]
                let contract = new web3.eth.Contract(abi, smart_contract_address)
                let totalSupply = await contract.methods.totalSupply().call()
                setTotalSupply(totalSupply)
                setContract(contract);
                document.getElementById('text-supply').textContent = totalSupply + "/3000"
            }
        }
    }

    async function mint() {
        if (account !== null) {
            var _mintAmount = Number(document.querySelector("[name=quantity]").value);
            var minRate = Number(await contract.methods.tokenPriceInCrypto(_mintAmount).call());
            contract.methods.mint(_mintAmount).send({ from: account, value: Web3Utils.toWei(minRate.toString(), 'gwei') }).on('receipt', async (receipt) => {
                totalSupply = await contract.methods.totalSupply().call()
                document.getElementById('total-supply').textContent = totalSupply + '/3000'
            })
        }
        else {
            alert('¡Conectese a Metamask para poder hacer el mint!')
        }
    }

    const [count, setCount] = useState(1);

    return (
        <>
            <div>
                <header>
                    <nav className="navbar navbar-expand-lg navbar-light">
                        <div className="container justify-content-center justify-content-md-between">
                            <a className="navbar-brand" href="https://leoponzio.com">
                                <img src="img/logo-circle.png" alt="" className="img-fluid circle-logo" />
                            </a>

                            <div className="navbar" id="menu">
                                <ul className="navbar-nav ms-auto">
                                    <li className="nav-item">
                                        <a className="nav-link" href="https://leoponzio.com"><i className="fa-solid fa-arrow-left"></i>Volver</a>
                                    </li>
                                    <li className="nav-item">
                                        {account === null ? <Link className="nav-link" to="#" onClick={connectWallet}>Connect Wallet</Link> : <p style={{ marginTop: '5px', padding: '1px' }} id='wallet-address'></p>}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
            <div id="index-page" className="body-pages">
                <div>
                    <section className="pt-0 pt-sm-7 pb-6">
                        <div className="container">
                            <div className="row">
                                <div className="col-lg-12">
                                    <div className="gold-border">
                                        <div className="collection-box">
                                            <h6 className="collection-number d-none d-sm-block" id="text-supply"></h6>
                                            <div className="collection-box-imgs">
                                                <div className="gold-box-img">
                                                    <div className="miscellany-sparkle box-collection one"></div>
                                                    <picture class="img-fluid">
                                                        <source srcset="img/img-box-collection.png 1x, img/img-box-collection@2x.png 2x" />
                                                        <img data-src="img/img-box-collection.png" srcset="img/img-box-collection.png 1x, img/img-box-collection@2x.png 2x" alt="" loading="lazy" class="img-fluid lazyload" />
                                                    </picture>
                                                    <div className="miscellany-sparkle box-collection two"></div>
                                                    <div className="miscellany-sparkle box-collection three"></div>
                                                </div>
                                                <div className="collection-floating-cards">
                                                    <div id="ponzioCard1">
                                                        <picture className="img-fluid">
                                                            <source srcSet="img/ponzio-thumb.png 1x, img/ponzio-thumb@2x.png 2x" />
                                                            <img data-src="img/ponzio-thumb.png" srcSet="img/ponzio-thumb.png 1x, img/ponzio-thumb@2x.png 2x" alt="" loading="lazy" className="img-fluid lazyload" />
                                                        </picture>
                                                    </div>
                                                    <div id="ponzioCard2">
                                                        <picture className="img-fluid">
                                                            <source srcSet="img/ponzio-thumb.png 1x, img/ponzio-thumb@2x.png 2x" />
                                                            <img data-src="img/ponzio-thumb.png" srcSet="img/ponzio-thumb.png 1x, img/ponzio-thumb@2x.png 2x" alt="" loading="lazy" className="img-fluid lazyload" />
                                                        </picture>
                                                    </div>
                                                    <div id="ponzioCard3">
                                                        <picture className="img-fluid">
                                                            <source srcSet="img/ponzio-thumb.png 1x, img/ponzio-thumb@2x.png 2x" />
                                                            <img data-src="img/ponzio-thumb.png" srcSet="img/ponzio-thumb.png 1x, img/ponzio-thumb@2x.png 2x" alt="" loading="lazy" className="img-fluid lazyload" />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="amount-form form-box">
                                                <div className="amount-price">
                                                    <div className="input-group mb-2 mb-lg-0 me-lg-2 counter-input">
                                                        <button className="btn btn-outline-secondary" type="button" id="buttonMinus" onClick={() => { if (count > 1) { setCount(count - 1) } }} data-field="quantity">-</button>
                                                        <input type="number" min="1" step="1" value={count} className="form-control" name="quantity" />
                                                        <button className="btn btn-outline-secondary" type="button" id="buttonPlus" onClick={() => setCount(count + 1)} data-field="quantity">+</button>
                                                    </div>
                                                    <div className="price-box">
                                                        <h2 className="title-secondary secondary-gold">100 USD</h2>
                                                    </div>
                                                </div>
                                                <div className="mt-2">
                                                    <button className="btn btn-primary mint me-1" onClick={mint}>MINT<i className="fas fa-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </>
    );
}