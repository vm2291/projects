import React from 'react';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import 'react-tabs/style/react-tabs.css';
import './App.scss';
import DomainCard from './components/DomainCard';

function App() {
  const domains = [
    { name: '.COM', price: '$5.99/yr', oldPrice: '$10.99/yr' },
    { name: '.AI', price: '$55.99/yr', oldPrice: '$10.99/yr' },
    { name: '.NET', price: '$7.99/yr', oldPrice: '$10.99/yr' },
    { name: '.HEALTH', price: '$7.99/yr', oldPrice: '$10.99/yr' },
    { name: '.CO.UK', price: '$3.99/yr', oldPrice: '$10.99/yr' },
    { name: '.ORG', price: '$15.99/yr', oldPrice: '$10.99/yr' },
    { name: '.CO', price: '$26.33/yr', oldPrice: '$10.99/yr' },
    { name: '.SEA', price: '$26.33/yr', oldPrice: '$10.99/yr' },
  ];

  return (
    <div className="app-container">
      <Tabs>
        <TabList>
          <Tab>Domains</Tab>
          <Tab>Web Hosting</Tab>
          <Tab>Dedicated Servers</Tab>
          <Tab>Virtual Servers</Tab>
          <Tab>WordPress Hosting</Tab>
          <Tab>Email Hosting</Tab>
          <Tab>VPS Hosting Servers</Tab>
          <Tab>Free Hosting</Tab>
        </TabList>

        <TabPanel>
          <div className="cards-container">
            {domains.map((domain, index) => (
              <DomainCard key={index} name={domain.name} price={domain.price} oldPrice={domain.oldPrice} />
            ))}
          </div>
        </TabPanel>
      </Tabs>
    </div>
  );
}

export default App;
