import React from 'react';
import './DomainCard.scss';

function DomainCard({ name, price, oldPrice }) {
  return (
    <div className="card">
      <h3 className="domain-name">{name}</h3>
      <p className="price">{price}</p>
      <p className="old-price">Instead of {oldPrice}</p>
      <button className="buy-button">Buy Now</button>
    </div>
  );
}

export default DomainCard;
