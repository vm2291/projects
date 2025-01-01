import React, { useState } from 'react';
import './Popup.scss';

const Popup = () => {
    const [isOpen, setIsOpen] = useState(false);

    const togglePopup = () => {
        setIsOpen(!isOpen);
    };

    const closePopup = (e) => {
        if (e.target.className === 'popup-backdrop' || e.target.className === 'cancel-button') {
            setIsOpen(false);
        }
    };

    return (
        <div className="popup-container">
            <button className="show-popup-button" onClick={togglePopup}>
                show popup
            </button>

            {isOpen && (
                <div className="popup-backdrop" onClick={closePopup}>
                    <div className="popup-content">
                        <div className="popup-header">
                            <h3 className="popup-title">Theme Color</h3>
                            <button className="change-theme-button">Change Theme</button>
                        </div>
                        <div className="color-options">
                            <div className="color-option">
                                <span>Font Color</span>
                                <div className="color-details">
                                    <span className="color-code">#444444</span>
                                    <div className="color-box" style={{ backgroundColor: '#444444' }}></div>
                                </div>
                            </div>
                            <hr />
                            <div className="color-option">
                                <span>Background Color</span>
                                <div className="color-details">
                                    <span className="color-code">#FFFFFF</span>
                                    <div className="color-box" style={{ backgroundColor: '#FFFFFF', border: '1px solid #ccc' }}></div>
                                </div>
                            </div>
                            <hr />
                            <div className="color-option">
                                <span>Button Color</span>
                                <div className="color-details">
                                    <span className="color-code">#2077FF</span>
                                    <div className="color-box" style={{ backgroundColor: '#2077FF' }}></div>
                                </div>
                            </div>
                            <hr />
                            <div className="color-option">
                                <span>Button Border Color</span>
                                <div className="color-details">
                                    <span className="color-code">#2077FF</span>
                                    <div className="color-box" style={{ backgroundColor: '#2077FF' }}></div>
                                </div>
                            </div>
                            <hr />
                            <div className="color-option">
                                <span>Buttons Mouseover Color</span>
                                <div className="color-details">
                                    <span className="color-code">#0035D1</span>
                                    <div className="color-box" style={{ backgroundColor: '#0035D1' }}></div>
                                </div>
                            </div>
                        </div>
                        <div className="popup-actions">
                            <button className="cancel-button" onClick={closePopup}>Cancel</button>
                            <button className="save-button">Save</button>
                        </div>
                    </div>
                </div>
            )}
        </div>
    );
};

export default Popup;
