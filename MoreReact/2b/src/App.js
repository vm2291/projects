import React from 'react';
import ToggleSection from './components/ToggleSection';
import ToggleRowSection from './components/ToggleRowSection';

const App = () => {
    return (
        <div>
            <ToggleSection />
            <div style={{ marginTop: '2rem' }}></div> 
            <ToggleRowSection />
        </div>
    );
};

export default App;
