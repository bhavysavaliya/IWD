<!DOCTYPE html>
<html>
<head><title>Salary Calculator</title></head>
<body>
  <h2>Salary Calculator</h2>
  <input type="number" id="salary" placeholder="Enter Basic Salary" required><br>
  <button onclick="calc()">Calculate</button>
  <div id="res"></div>

  <script>
    function calc() {
      let s = parseFloat(document.getElementById('salary').value);
      if (!s || s <= 0) return alert("Enter valid salary");

      let da = 0.5 * s, hra = 0.1 * s, med = 0.04 * s;
      let gross = s + da + hra + med;
      let ins = 0.07 * gross, pf = 0.05 * gross;
      let net = gross - (ins + pf);

      document.getElementById('res').innerHTML = `
        <p><b>Basic Salary:</b> ₹${s.toFixed(2)}</p>
        <p><b>Gross Salary:</b> ₹${gross.toFixed(2)}</p>
        <p><b>Deductions (Insurance + PF):</b> ₹${(ins + pf).toFixed(2)}</p>
        <p><b>Net Salary:</b> ₹${net.toFixed(2)}</p>
      `;
    }
  </script>
</body>
</html>
