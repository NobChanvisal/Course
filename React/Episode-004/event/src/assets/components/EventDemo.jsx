import { useState } from 'react';

const EventDemo = () => {
  const [buttonText, setButtonText] = useState('');
  const [copyText, setCopyText] = useState('Copy this text.');
  const [hoverStyle, setHoverStyle] = useState({});

  const handleClick = () => {
    setButtonText('Button Clicked!');
  };

  const handleCopy = () => {
    setCopyText('Text Copied!');
  };

  const handleMouseEnter = () => {
    setHoverStyle({ backgroundColor: 'lightyellow' });
  };

  const handleMouseLeave = () => {
    setHoverStyle({});
  };

  return (
    <div className="p-4 space-y-4">
      {/* Button Click Event */}
      <button
        onClick={handleClick}
        className="px-4 py-2 bg-blue-500 text-white rounded"
      >
        Click Me
      </button>
      <p className="text-gray-700">{buttonText}</p>

      {/* Copy Event */}
      <div>
        <p onCopy={handleCopy} className="text-gray-700">
          {copyText}
        </p>
      </div>

      {/* Mouse Hover Event */}
      <div>
        <p
          onMouseEnter={handleMouseEnter}
          onMouseLeave={handleMouseLeave}
          style={hoverStyle}
          className="p-2 border rounded"
        >
          Hover over this text.
        </p>
      </div>
    </div>
  );
};

export default EventDemo;
