import MyApiList from './MyApiList.js';

let List = new MyApiList('https://classes.codingbootcamp.cz/assets/classes/api/headlines.php', 'my_container');

console.log(List.load());
console.log(List.display());