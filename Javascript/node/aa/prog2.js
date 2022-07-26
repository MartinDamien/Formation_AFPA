const getData = async () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("some data");
    }, 2000);
  });
};

const doSomething = async () => {
  const data = await getData();
  console.log(data);
};

doSomething();


// Language: javascript
// Path: prog3.js
// Compare this snippet from prog1.js:
// console.log('before')
// setTimeout(() => {
//   console.log('inside')
// }, 2000)
// console.log('after')
