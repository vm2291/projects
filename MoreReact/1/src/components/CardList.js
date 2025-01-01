// src/components/CardList.js
import React from 'react';
import Card from './Card';
import './CardList.scss';
import profilePic from '../profilepic.png';

const cardsData = [
  {
    version: '3.3.0',
    date: '(14/05/2018)',
    tag: 'New',
    tagColor: '#28a745',
    name: 'Kevin Joe',
    description: 'File system changed from Dokan to CBFS Host Cloud Drive is now a network drive\nVarious bug fixes and stability improvements. Share permissions re-design and optimization.',
    buttonText: 'Download',
    profilePicSrc: profilePic,
  },
  {
    version: '3.1.0',
    date: '(20/05/2015)',
    tag: 'Fix',
    tagColor: '#007bff',
    name: 'Kevin Joe',
    description: 'Introducing Host Cloud Drive - virtual drive functionality\nNew Share options and management\nNew, more user-friendly design.\nSync optimizations. Various performance\n improvements and bug fixes.',
    buttonText: 'Download',
    profilePicSrc: profilePic,
  },
  {
    version: '3.1.0',
    date: '(20/05/2015)',
    tag: 'Improvement',
    tagColor: '#6f42c1',
    name: 'Kevin Joe',
    description: 'Added Settings for Auto Start\nAdded Update Notification\nSpeed Optimization\nBug Fixes.',
    buttonText: 'Download',
    profilePicSrc: profilePic,
  },
  {
    version: '3.3.0',
    date: '(14/05/2018)',
    tag: 'New',
    tagColor: '#28a745',
    name: 'Kevin Joe',
    description: 'File system changed from Dokan to CBFS Host Cloud Drive\nis now a network drive\nVarious bug fixes and stability improvements. Share permissions re-design and optimization.',
    buttonText: 'Download',
    profilePicSrc: profilePic,
  },
  {
    version: '3.1.0',
    date: '(20/05/2015)',
    tag: 'Fix',
    tagColor: '#007bff',
    name: 'Kevin Joe',
    description: 'Introducing Host Cloud Drive - virtual drive functionality\nNew Share options and management\nNew, more user-friendly design\nSync optimizations. Various performance\n improvements and bug fixes.',
    buttonText: 'Download',
    profilePicSrc: profilePic,
  },
  {
    version: '3.1.0',
    date: '(20/05/2015)',
    tag: 'Improvement',
    tagColor: '#6f42c1',
    name: 'Kevin Joe',
    description: 'Added Settings for Auto Start\nAdded Update Notification\nSpeed Optimization\nBug Fixes.',
    buttonText: 'Download',
    profilePicSrc: profilePic,
  }
];

const CardList = () => {
  return (
    <div className="card-list">
      {cardsData.map((card, index) => (
        <Card
          key={index}
          version={card.version}
          date={card.date}
          tag={card.tag}
          tagColor={card.tagColor}
          name={card.name}
          description={card.description}
          buttonText={card.buttonText}
          profilePicSrc={card.profilePicSrc}
        />
      ))}
    </div>
  );
};

export default CardList;
