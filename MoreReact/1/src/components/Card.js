import React from 'react';
import './Card.scss';
import profilePic from '../profilepic.png';

const Card = ({ version, date, tag, profilePicSrc, name, description, buttonText, tagColor }) => {
  return (
    <div className="card">
      <div className="card-header">
        <div className="version-date">
          <span className="version">{version}</span>
          <span className="date">{date}</span>
        </div>
      </div>
      <div className="card-tag">
        <span className="tag" style={{ backgroundColor: tagColor }}>{tag}</span>
        <img className="profile-pic" src={profilePicSrc || profilePic} alt={`${name}'s profile`} />
        <span className="name">{name}</span>
      </div>
      <p className="description">{description}</p>
      <button className="download-button">{buttonText}</button>
    </div>
  );
};

export default Card;
