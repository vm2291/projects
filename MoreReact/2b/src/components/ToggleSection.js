import React, { useState } from 'react';
import './ToggleSection.scss';

const ToggleSection = () => {
  const [isOpen, setIsOpen] = useState(false);

  const toggleContent = () => {
    setIsOpen(!isOpen);
  };

  return (
    <div className="toggle-section">
      <div className="header" onClick={toggleContent}>
        <h3>Why park a domain name in Parkname?</h3>
        <span className={`icon ${isOpen ? 'open' : ''}`}></span>
      </div>
      {isOpen && (
        <div className="content">
          <p>
            Parkname is the leading industry standard for domain name parking and monetization services. We offer a wide variety of services to help you achieve success.
          </p>
        </div>
      )}
    </div>
  );
};

export default ToggleSection;
