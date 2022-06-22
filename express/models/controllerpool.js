const conn = require("./mysqlconfig");

exports.findAll = function (nomtable, callback) {
  let sql = "SELECT * FROM " + nomtable;
  conn.query(sql, function (err, rows) {
    if (err) {
      callback(err, null);
    }callback(rows);
  });
}
exports.add = function (nomtable, data, callback) {
  let sql = "INSERT INTO " + nomtable + "columns1,column2" + "VALUES (?,?)";
  conn.query(sql, data, function (rows) {
    callback(rows);
  });
}