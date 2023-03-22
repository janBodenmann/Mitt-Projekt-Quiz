const mysql = require('mysql');

// create a connection to the MySQL database
const connection = mysql.createConnection({
  host: '10.5.43.26',
  user: 'root',
  password: '',
  database: 'quiz'
});

// update the score for the user with ID 1
const score = 100;
const userId = 1;

const query = `UPDATE accounts SET score = ${score} WHERE username = t`;
connection.query(query, (error, results) => {
  if (error) {
    console.error(error);
  } else {
    console.log('Score updated successfully!');
  }
});
