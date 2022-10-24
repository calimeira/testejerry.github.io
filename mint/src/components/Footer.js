import React from 'react'

export default function Footer() {
  return (
    <footer className="footer">
      <div className="container">
        <div className="row">
          <div className="col-lg-3">
            <div className="footer-brand-info">
              <div className="footer-brand">
                <img src="img/wfg-logo.svg" alt="WFG Logo" className="img-fluid wfg-logo" />
                <img src="img/logo-circle.png" alt="" className="img-fluid logo-circle-footer" />
              </div>
              <h6 className="wfg-title">WFG | Experience Makers</h6>
            </div>
          </div>
          <div className="col-lg-7 offset-lg-2 ">
            <ul className="navbar-nav ms-auto">
              <li className="nav-item">
                <a className="nav-link" href="../index.php">Inicio</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="../faqs.php">FAQs</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="./mint/index.html">MINT</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="../gallery.php">Marketplace</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="https://www.ticketek.com.ar/leo-ponzio-la-despedida/estadio-river-plate" rel="noreferrer" target="_blank">Entradas</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="../contact.php">Contacto</a>
              </li>
            </ul>
            <div className="copyright-box">
              <p>Copyright © 2022</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


  )
}