const users = [
  //users from final mysql database should be added here
  //this temporary; for development purposes only
  {
    id: 1,
    firstname: "Market",
    lastname: "Eka",
    phone: "0112345678",
    address: "123, someplace, somewhere",
    email: "dev@market.lk",
    password: "12345",
  },
  {
    id: 2,
    firstname: "Rushan",
    lastname: "Jayasundara",
    phone: "0112345678",
    address: "123, someplace, somewhere",
    email: "rushan@market.lk",
    password: "12345",
  },
  {
    id: 3,
    firstname: "Amandi", //T.S. ??? :(
    lastname: "Amandi",
    phone: "0112345678",
    address: "123, someplace, somewhere",
    email: "amandi@market.lk",
    password: "12345",
  },
  {
    id: 4,
    firstname: "Sewwandi",
    lastname: "Samaraweera",
    phone: "0112345678",
    address: "123, someplace, somewhere",
    email: "sewwandi@market.lk",
    password: "12345",
  },
  {
    id: 5,
    firstname: "Channa",
    lastname: "Jayawickrama",
    phone: "0112345678",
    address: "123, someplace, somewhere",
    email: "channa@market.lk",
    password: "12345",
  },
  {
    id: 6,
    firstname: "Pankaja",
    lastname: "Wijesena",
    phone: "0112345678",
    address: "123, someplace, somewhere",
    email: "pankaja@market.lk",
    password: "12345",
  },
];

const getUsers = () => users;

const getUserByEmail = (email) => users.find((user) => user.email === email);

const addUser = (user) => {
  user.id = users.length + 1;
  users.push(user);
};

module.exports = {
  getUsers,
  getUserByEmail,
  addUser,
};
