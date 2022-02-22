import React from 'react';
 
 
class Contenido extends React.Component {
 
  render() {
      let productos = {
          nombre: 'Collar',
          material: ['Oro','Plata','Metal'],
          precio: '15€'
      };

      let Descripción = "Collar de Oro 24k, Plata o Metal";

      let productos2 = {
          nombre: 'Anillo',
          material: ['Oro', 'Plata', 'Metal'],
          precio: '20€'
      };

      let Descripción2 = "Anillo de Oro 24k, Plata o Metal";

    return (
        <div className='contenido'>
            <h2><b>Nuestros productos</b></h2>
            <h3><b>Lo que ofrecemos</b></h3>
            <hr/>
            <h4>{'Producto: ' + productos.nombre}</h4>
            <h4>{'Precio: ' + productos.precio}</h4>
            <h4>{'Materiales:'}</h4>
            <ul>
                {
                    productos.material.map((producto, i) => {
                        return(
                            <li key={i}>
                            <h4>{producto}</h4>
                            </li>
                        )
                    })
                }
            </ul>
            <h5>{Descripción}</h5>
            <hr/>
            <h4>{'Producto: ' + productos2.nombre}</h4>
            <h4>{'Precio: ' + productos2.precio}</h4>
            <h4>{'Materiales:'}</h4>
            <ul>
                {
                    productos2.material.map((producto2, i) => {
                        return(
                            <li key={i}>
                                <h4>{producto2}</h4>
                            </li>
                        )
                    })
                }
            </ul>
            <h5>{Descripción2}</h5>
            <hr/>
        </div>
 
    )
    
  }
 
}
 
export default Contenido;