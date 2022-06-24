const sum = require(mysum);

test('il que 1 + 2 soit egal a 3', () => {
    expect(sum(1, 2)).toBe(3);
});