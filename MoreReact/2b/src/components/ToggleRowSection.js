import React, { useState } from 'react';
import { FaUserCircle, FaChevronUp, FaChevronDown, FaChevronRight } from 'react-icons/fa';
import './toggle-row-section.scss';

const ToggleRowSection = () => {
  const [openQuestion, setOpenQuestion] = useState(null);
  const [isAboutUsOpen, setIsAboutUsOpen] = useState(true);

  const toggleQuestion = (index) => {
    setOpenQuestion(openQuestion === index ? null : index);
  };

  const toggleAboutUs = () => {
    setIsAboutUsOpen(!isAboutUsOpen);
    setOpenQuestion(null);
  };

  const questions = [
    {
      question: "How does Parkname separate itself from other domain name parking companies?",
      answer: "Your domains are a valuable online property. As in any investment, you want the most efficient, easy way to make sure your property is going to be profitable. Do you own more than 1,000 domains? As a professional domainer, you will find everything you need through Parkname to generate maximum profits from your domain portfolio."
    },
    {
      question: "Is Parkname Parking actually free?",
      answer: "Lorem ipsum dolor sit amet. Vel autem blanditiis qui autem saepe in tenetur dolores et quod quas et voluptas voluptas ad sequi quia."
    },
    {
      question: "What you do?",
      answer: "Lorem ipsum dolor sit amet. Vel autem blanditiis qui autem saepe in tenetur dolores et quod quas et voluptas voluptas ad sequi quia."
    },
    {
      question: "When was Parkname first founded?",
      answer: "Lorem ipsum dolor sit amet. Vel autem blanditiis qui autem saepe in tenetur dolores et quod quas et voluptas voluptas ad sequi quia."
    },
  ];

  return (
    <div className="toggle-row-section">
      <div className="header" onClick={toggleAboutUs}>
        <FaUserCircle className="icon" />
        <div className="text-wrapper">
          <h3 className="about-us">About Us</h3>
          <span className="articles-count">4 articles in this topic</span>
        </div>
        {isAboutUsOpen ? <FaChevronUp className="arrow-icon" /> : <FaChevronDown className="arrow-icon" />}
      </div>
      {isAboutUsOpen && (
        <div className="content">
          {questions.map((item, index) => (
            <div key={index} className="question">
              <div className="question-header" onClick={() => toggleQuestion(index)}>
                {item.question}
                {openQuestion === index ? <FaChevronUp className="arrow-icon" /> : <FaChevronRight className="arrow-icon" />}
              </div>
              {openQuestion === index && (
                <div className="answer">
                  {item.answer}
                </div>
              )}
              {index < questions.length - 1 && <div className="horizontal-line" />}
            </div>
          ))}
        </div>
      )}
    </div>
  );
};

export default ToggleRowSection;
