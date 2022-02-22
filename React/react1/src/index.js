import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import reportWebVitals from './reportWebVitals';
import App from './App';

import '../node_modules/bootstrap/dist/css/bootstrap.min.css'; // Archivo CSS de Bootstrap 4 
import '../node_modules/bootstrap/dist/js/bootstrap.min.js'; // Archivo Javascript de Bootstrap 4
// import Menu from './componentes/menu/Menu';
// import Contenido from './componentes/contenido/Contenido';
// import Footer from './componentes/footer/Footer';

ReactDOM.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
  document.getElementById('root1')
);

// ReactDOM.render(
//   <React.StrictMode>
//     <Contenido />
//   </React.StrictMode>,
//   document.getElementById('root2')
// );

// ReactDOM.render(
//   <React.StrictMode>
//     <Footer />
//   </React.StrictMode>,
//   document.getElementById('root3')
// );


reportWebVitals();
