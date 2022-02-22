import './App.css';
//Importar componentes
import Menu from './componentes/menu/Menu';
import Footer from './componentes/footer/Footer';
import Contenido from './componentes/contenido/Contenido';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Menu/>
        <Contenido/>
      </header>
      <footer>
        <Footer/>
      </footer>
    </div>
  );
}

export default App;
