import React from 'react';
import DomainItem from './DomainItem';
import './DomainList.scss';
import { domainItems } from '../data/domainItems';

const DomainList = () => {
  return (
    <div className="domain-list">
      {domainItems.map(item => (
        <DomainItem
          key={item.id}
          icon={item.icon}
          title={item.title}
          description={item.description}
        />
      ))}
    </div>
  );
};

export default DomainList;
