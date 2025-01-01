import React from 'react';
import './DomainItem.scss';

const DomainItem = ({ icon, title, description }) => {
  return (
    <div className="domain-item">
      <div className="icon">{icon}</div>
      <div className="text-content">
        <h2>{title}</h2>
        <p>{description}</p>
      </div>
    </div>
  );
};

export default DomainItem;
