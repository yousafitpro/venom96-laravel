import React from 'react';

import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { HashRouter as Router, Route, Switch } from "react-router-dom";
import Dummy from './components/Dummy';
import Legiscan from './components/Legiscan/Legiscan';
import Officials from './components/Official/Officials';
import Store from './Store/Store';

function App() {
    return (
       <>
               <Provider store={Store}>
       <Router>
       <Switch>
       <Route exact path="/" component={Dummy} />
       <Route  path="/legiscan" component={Legiscan} />
    <Route  path="/officials" component={Officials} />

    


</Switch>

       </Router>
       </Provider>
       </>
    );
}

export default App;

if (document.getElementById('spa')) {
    ReactDOM.render(<App />, document.getElementById('spa'));
}
