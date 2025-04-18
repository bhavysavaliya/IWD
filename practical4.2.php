<html>
<head><title>GTU Grade Calculator</title></head>
<body>
  <h2>GTU Grade Calculator</h2>
  <label for="Subject1">Marks in Subject 1:</label>
  <input type="number" id="subject1"><br>
  <label for="Subject2">Marks in Subject 2:</label>
  <input type="number" id="subject2"><br>
  <label for="Subject3">Marks in Subject 3:</label>
  <input type="number" id="subject3"><br>
  <label for="Subject4">Marks in Subject 4:</label>
  <input type="number" id="subject4"><br>
  <button onclick="calculateGrade()">Calculate Grade</button>
  
  <div id="result"></div>

  <script>
    function calculateGrade() {
      const marks = [1, 2, 3, 4].map(i => parseFloat(document.getElementById(`subject${i}`).value));
      if (marks.some(m => m < 0 || m > 100)) return alert("Enter valid marks (0-100).");

      const getGrade = marks => marks >= 85 ? "AA" : marks >= 75 ? "AB" : marks >= 65 ? "BB" :
                             marks >= 55 ? "BC" : marks >= 45 ? "CC" : marks >= 40 ? "CD" : 
                             marks >= 35 ? "DD" : "FF (FAIL)";
      
      const resultTable = marks.map((mark, i) => {
        const grade = getGrade(mark);
        return `<tr><td>Subject ${i+1}</td><td>${mark}</td><td>${grade}</td><td>${mark < 35 ? "FAIL" : "PASS"}</td></tr>`;
      }).join('');

      document.getElementById('result').innerHTML = `<table><thead><tr><th>Subject</th><th>Marks</th><th>Grade</th><th>Status</th></tr></thead><tbody>${resultTable}</tbody></table>`;
    }
  </script>
</body>
</html>
