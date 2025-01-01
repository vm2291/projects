import { FaGlobe, FaSearch, FaLanguage, FaBullhorn, FaBuilding, FaClipboardCheck, FaCheckCircle, FaFont, FaTags } from 'react-icons/fa';

export const domainItems = [
  {
    id: 1,
    icon: <FaCheckCircle />,
    title: "The TLDL",
    description: "Does the domain extension match the language of the domain name?",
  },
  {
    id: 2,
    icon: <FaClipboardCheck />,
    title: "Domain Length",
    description: "Is the domain short enough to remember?",

  },
  {
    id: 3,
    icon: <FaLanguage />,
    title: "Language",
    description: "How complex is the actual domain name?",


  },
  {
    id: 4,
    icon: <FaGlobe />,
    title: "International recognition",
    description: "Can the domain name be used on an international scale?",
  },
  {
    id: 5,
    icon: <FaSearch />,
    title: "Search engine",
    description: "Does the domain follow search engine guidelines?",

  },
  {
    id: 6,
    icon: <FaBullhorn />,
    title: "Advertising Potential",
    description: "Could the domain be used for advertising campaigns?",
  },
  {
    id: 7,
    icon: <FaTags />,
    title: "Sales Opportunities",
    description: "Can the domain name be used on an international scale?",
  },
  {
    id: 8,
    icon: <FaFont />,
    title: "Typo susceptibility",
    description: "How high is the risk of mistyping the domain name?",
  },
  {
    id: 9,
    icon: <FaBuilding />,
    title: "Business potential",
    description: "Can the domain be used as your company address?",
  }
];
