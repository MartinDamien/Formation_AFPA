const dicho = require("dicho.js");
const recherche = require("./dicho");

test("existe inferieur", () => {
  expect(recherche([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 5)).toBe(4);
});

test("existe superieur", () => {
    expect(recherche([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 11)).toBe(10);
})

test("existe pas", () => {
    expect(recherche([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 0)).toBe(-1);
})

test("existe", () => {
    expect(recherche([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 5)).toBe(4);
})

