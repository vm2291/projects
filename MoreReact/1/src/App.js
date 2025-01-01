// src/App.js
import React from 'react';
import DomainList from './components/DomainList';
import CardList from './components/CardList';

const App = () => {
  return (
    <div className="App">
      <DomainList />
      <CardList />
    </div>
  );
};

export default App;
