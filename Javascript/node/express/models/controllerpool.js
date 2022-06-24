const conn = require("./mysqlconfig");

function dump(obj) {
  var out = '';
  for (var i in obj) {
      out += i + ": " + obj[i] + "\n";
  }

  alert(out);

  // or, if you wanted to avoid alerts...

  var pre = document.createElement('pre');
  pre.innerHTML = out;
  document.body.appendChild(pre)
}

exports.findAll = function (nomtable, callback) {
  let sql = "SELECT * FROM " + nomtable;
  conn.query(sql, function (err, rows) {
    if (err) {
      callback(err, null);
    }callback(rows);
  });
}
exports.add = function (nomtable, data, callback) {
  console.debug(data);
  conn.query("INSERT INTO " + nomtable + " (nom,description,poid,image,espece_id) VALUES (?,?,?,?,?)",[data.nom,data.description,data.poid,data.image,data.espece_id], function (err) { 
  callback(err);
  });
}

exports.remove = function (nomtable, id, callback) {
  conn.query("DELETE FROM " + nomtable + " WHERE id = " + id, function (rows) {
    callback(rows);
  });
}

exports.modify = function (nomtable, data, callback) {
  conn.query("UPDATE " + nomtable + " SET libelle = ?, description = ? WHERE id = ?", [data.libelle, data.description, data.id], function (err) {
    callback(err);
  });
}